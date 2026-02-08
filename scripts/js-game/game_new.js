//base setup
var cvs = document.getElementById("canvas");
var ctx = cvs.getContext("2d");
var scoreboard = document.getElementById("scoreboard");
const START_SCREEN = document.getElementById("startScreen");
const GAMEOVER_SCREEN = document.getElementById("gameOverScreen");
var startbutton = document.getElementById("startButton");
var restartbutton = document.getElementById("restartButton");

//Game parameters
var score = 0;
var level = 1;
var spawn_score_for_level = 5 * level;
var current_ssfl = 0;
var bullets = [];
var enemies = [];
var enemies_max_count = 10 + (2 * level);
var enemies_spawned = 0;
var game_state = "start";
var transition_timer = 0;
var is_in_transition = false;
const TRANSITION_DURATION = 3000;
var spawners = [];


// Misc
var song = new Audio("assets/music/thf3_gargoyle_remix.mp3");
song.volume = 0.25;
song.loop = true;

// Key event listeners
var keys = { left: false, right: false, space: false };
window.addEventListener('keydown', (e) => {
    //console.log(e.key);
    if (e.key === 'a' || e.key === 'ф') keys.left = true;
    if (e.key === 'd' || e.key === 'в') keys.right = true;
    if (e.key === ' ') keys.space = true;
});
window.addEventListener('keyup', (e) => {
    //console.log(e.key);
    if (e.key === 'a' || e.key === 'ф') keys.left = false;
    if (e.key === 'd' || e.key === 'в') keys.right = false;
    if (e.key === ' ') keys.space = false;
});

// UI & parameter update functions
function level_update() {
    enemies_max_count = 10 + (2 * level);
    spawn_score_for_level = 5 * level;
    current_ssfl = 0;
    enemies_spawned = 0;
    player.x = cvs.width / 2;
    bullets = [];
    generate_spawners();
}

//Classes
class Enemy{

    constructor(xName, xHp, xAD, xS, xAS, xScore, xSScore, xVecX, xVecY, xAT){
        if (xName instanceof Enemy) {
            Object.assign(this, xName);
        } else {
            this.name = xName;
            this.hp = xHp;
            this.attack_damage = xAD;
            this.sprite = new Image();
            this.sprite.src = xS;
            this.attack_sprite = new Image();
            this.attack_sprite.src = xAS;
            this.score = xScore;
            this.spawn_score = xSScore;
            this.attack_timer = xAT;
            this.current_at = xAT;
            this.vec_x = xVecX;
            this.vec_y = xVecY;
            this.y = 0;
            this.x = 0;
        }
    }

    update(deltaTime){
        this.y += this.vec_y * deltaTime;
        this.current_at -= deltaTime;
        if(this.current_at <= 0){
            this.shoot();
            this.current_at = this.attack_timer;
        }
    }

    shoot() {
        bullets.push({
            x: this.x + this.sprite.width / 1.5 / 2,
            y: this.y + this.sprite.height / 1.5,
            vec_x: 0,
            vec_y: 600, // Enemy bullets move downward
            fromEnemy: true,
            damage: this.attack_damage,
            sprite: this.attack_sprite
        });
        play_sound();
    }

}

class Player{

    constructor(xHp, xAD, xS, xAS) {
        this.hp = xHp;
        this.attack_damage = xAD;
        this.sprite = new Image();
        this.sprite.src = xS;
        this.attack_sprite = new Image();
        this.attack_sprite.src = xAS;
        this.shoot_timer = 0.5;
        this.current_st = this.shoot_timer;
        this.x = cvs.width / 2;
        this.y = cvs.height - 40;
        this.speed = 200;
    }

    update(deltaTime){
        if (keys.left) this.x -= this.speed * deltaTime;
        if (keys.right) this.x += this.speed * deltaTime;

        if( this.x <= 20) this.x = 20;
        if( this.x >= cvs.width - this.sprite.width ) this.x = cvs.width - this.sprite.width;
        this.current_st -= deltaTime;
        if(keys.space && this.current_st <= 0) {
            this.shoot();
            this.current_st = this.shoot_timer;
        }
    }

    shoot() {
        bullets.push({
            x: this.x + this.sprite.width / 1.5 / 2,
            y: this.y - this.sprite.height / 1.5,
            vec_x: 0,
            vec_y: -1000, // Player bullets move upward
            fromEnemy: false,
            damage: this.attack_damage,
            sprite: this.attack_sprite
        });
        play_sound();
    }

}

class EnemySpawner{
    constructor(xST, xEnemy) {
        if (!(xEnemy instanceof Enemy)) {
            throw new Error('Invalid enemy type');
        }
        this.spawn_timer = xST;
        this.current_st = this.spawn_timer;
        this.enemy = xEnemy;
    }

    update(deltaTime){
        if(current_ssfl <= spawn_score_for_level && enemies_spawned < enemies_max_count){
            this.current_st -= deltaTime;
            if(this.current_st <= 0){
                this.spawn();
                this.current_st = this.spawn_timer;
            }
        }
    }

    spawn() {
        var new_enemy = new Enemy(this.enemy);
        new_enemy.x = Math.random() * (cvs.width - new_enemy.sprite.width) + 20;
        console.log(new_enemy.sprite.width);
        console.log(new_enemy.sprite.height);
        enemies.push(new_enemy);
        current_ssfl += new_enemy.spawn_score;
        console.log(current_ssfl);
        console.warn(spawn_score_for_level);
        enemies_spawned++;
    }
}

// Game objects
var player = new Player(100, 5, "assets/sprites/player.png", "assets/sprites/bullet1.png");
var scout = new Enemy("Scout", 2, 2, "assets/sprites/scout.png", "assets/sprites/bullet2.png", 100, 1, 0, 2, 1.5);
var foorager = new Enemy("Foorager", 10, 3, "assets/sprites/foorager.png", "assets/sprites/bullet2.png", 250, 2, 0, 1, 2.5);
var fighter = new Enemy("Fighter", 5, 5, "assets/sprites/fighter.png", "assets/sprites/bullet2.png", 200, 1, 0, 5, 1);
var destroyer = new Enemy("Destroyer", 20, 10, "assets/sprites/destroyer.png", "assets/sprites/bullet2.png", 500, 4, 0, 2, 2.5);
var cruiser = new Enemy("Cruiser", 35, 20, "assets/sprites/cruiser.png", "assets/sprites/bullet2.png", 1000, 8, 0, 2, 5);
var battleship = new Enemy("Battleship", 100, 50, "assets/sprites/battleship.png", "assets/sprites/bullet2.png", 5000, 15, 0, 1, 10);

function update(deltaTime){
    if (game_state != "playing") return;
    if (is_in_transition){
        transition_timer -= deltaTime;
        if(transition_timer <= 0 ){
            is_in_transition = false;
            level++;
            level_update();
        }
        return;
    }

    

    player.update(deltaTime);
    enemies.forEach(enemy => enemy.update(deltaTime));
    bullets.forEach(bullet => {
        bullet.y += bullet.vec_y * deltaTime
    });

    // Collision detection
    bullets.forEach((bullet, index) => {
        if (!bullet.fromEnemy) {
            enemies.forEach((enemy, eindex) => {
                    if (is_colliding(bullet, enemy)) {
                        enemy.hp -= bullet.damage;
                        //console.log(enemy.name + " " + enemy.hp);
                        bullets.splice(index, 1);
                        if (enemy.hp <= 0) {
                            enemies.splice(eindex, 1);
                            score += enemy.score;
                        }
                    }
            });
        } else {
                if (is_colliding(bullet, player)) {
                    player.hp -= bullet.damage;
                    console.warn(player.hp);
                    bullets.splice(index, 1);
                    if (player.hp <= 0) {
                        game_state = "game_over";
                    }
                }
        }
    });

    bullets = bullets.filter(b => b.y > 0 && b.y < cvs.height);
    spawners.forEach(spawner => spawner.update(deltaTime));

    if(current_ssfl >= spawn_score_for_level && enemies.length === 0){
        is_in_transition = true;
        transition_timer = TRANSITION_DURATION / 1000;
    }
}

function render(){
    ctx.clearRect(0, 0, cvs.width, cvs.height);

    // Draw player
    ctx.drawImage(player.sprite, player.x, player.y - 64, player.sprite.width / 1.5, player.sprite.height / 1.5);

    // Draw enemies
    enemies.forEach(enemy => {
        ctx.drawImage(enemy.sprite, enemy.x, enemy.y, enemy.sprite.width, enemy.sprite.height);
    });

    // Draw bullets
    bullets.forEach(bullet => {
        ctx.drawImage(bullet.sprite, bullet.x, bullet.y, 24, 32);
    });

    // Draw HUD
    ctx.fillStyle = 'white';
    ctx.font = '20px Arial';
    ctx.fillText(`Level: ${level}`, 10, cvs.height - 20);
    ctx.fillText(`Score: ${score}`, 10, cvs.height - 40);
    ctx.fillText(`HP: ${player.hp}`, 10, cvs.height - 60);

    // Draw transition screen
    if (is_in_transition) {
        ctx.fillStyle = 'rgba(0,0,0,0.5)';
        ctx.fillRect(0, 0, cvs.width, cvs.height);
        ctx.fillStyle = 'white';
        ctx.font = '48px Arial';
        ctx.fillText(`Level ${level + 1}`, cvs.width / 2 - 100, cvs.height / 2);
    }
}

//БОЖЕ БЛЯТЬ
function is_colliding(a, b) {
    var left_x = b.x;
    var right_x = b.x + b.sprite.width;
    var bottom_y = b.y;
    if(!a.fromEnemy)
        return (a.x + a.sprite.width / 2) > left_x && (a.x + a.sprite.width / 2) < right_x  && a.y < bottom_y + b.sprite.height;
    else
    return (a.x + a.sprite.width / 2) > left_x && (a.x + a.sprite.width / 2) < right_x  && a.y > bottom_y - b.sprite.height;
}


// Game loop
var lastTime = 0;
function game_loop(timestamp) {
    const deltaTime = (timestamp - lastTime) / 1000; // Delta time in seconds
    lastTime = timestamp;

    if (game_state === "playing") {
        update(deltaTime);
        render();
    } else if (game_state === "start") {
        START_SCREEN.style.display = "block";
        GAMEOVER_SCREEN.style.display = "none";
    } else if (game_state === "game_over") {
        START_SCREEN.style.display = "none";
        GAMEOVER_SCREEN.style.display = "block";
    }

    requestAnimationFrame(game_loop);
}

function init_game() {
    level = 1;
    score = 0;
    enemies = [];
    bullets = [];
    song.play();
    generate_spawners();
    level_update();
    player = new Player(100, 5, "assets/sprites/player.png", "assets/sprites/bullet1.png");
    game_state = "playing";
    START_SCREEN.style.display = 'none';
    GAMEOVER_SCREEN.style.display = 'none';
}

// Utility functions
function generate_spawners() {
    spawners = [];
    for (var i = 0; i < level * 2; i++) {
        switch (get_random_weighted()) {
            case 0:
                spawners.push(new EnemySpawner(5 - (0.1 * level), scout));
                break;
            case 1:
                spawners.push(new EnemySpawner(10 - (0.1 * level), foorager));
                break;
            case 2:
                spawners.push(new EnemySpawner(7.5 - (0.1 * level), fighter));
                break;
            case 3:
                spawners.push(new EnemySpawner(10 - (0.1 * level), destroyer));
                break;
            case 4:
                spawners.push(new EnemySpawner(15 - (0.1 * level), cruiser));
                break;
            case 5:
                spawners.push(new EnemySpawner(25 - (0.1 * level), battleship));
                break;
        }
    }
}

function get_random_weighted() {
    const weights = [6, 5, 4, 3, 2, 1]; // Weights for enemy types
    const totalWeight = weights.reduce((sum, w) => sum + w, 0);
    const random = Math.random() * totalWeight;

    let accumulatedWeight = 0;
    for (let i = 0; i < weights.length; i++) {
        accumulatedWeight += weights[i];
        if (random <= accumulatedWeight) {
            return i;
        }
    }
    return 0; // Fallback
}

function play_sound(){
    var shot = new Audio("assets/sounds/shot.mp3");
    shot.play();
}

// Button event listeners
startbutton.addEventListener('click', init_game);
restartbutton.addEventListener('click', init_game);

// Start the game loop
requestAnimationFrame(game_loop);