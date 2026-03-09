<?php
/**
* Category Filter Component
*
* @param array $categories List of categories
* @param array $catDict Dictionary for translating category names ( optional )
*/

function renderCategoryFilter( $categories, $catDict = [] ) {
    ?>
    <section class = 'categories-filter'>
    <div class = 'container'>
    <ul class = 'categories-list'>
    <li>
    <a href = '/blog'>Все статьи</a>
    </li>
    <?php foreach ( $categories as $category ): ?>
    <li>
    <a href = "/blog/category/<?php echo urlencode($category); ?>">
    <?php echo isset( $catDict[ $category ] ) ? htmlspecialchars( $catDict[ $category ] ) : htmlspecialchars( $category );
    ?>
    </a>
    </li>
    <?php endforeach;
    ?>
    </ul>
    </div>
    </section>

    <style>
    /* Filter */

    .categories-filter {
        display: flex;
        gap: 1rem;
        margin-bottom: 2rem;
        justify-content: center;
        flex-wrap: wrap;
    }

    .categories-list a {
        padding: 0.5rem 1rem;
        border: 2px solid gray;
        border-radius: 25px;
        background: transparent;
        color: black;
        font-size: 0.9rem;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .categories-list a:hover {
        background: red;
        color: #fff;
    }

    html.dark .categories-list {
        color: white;
    }

    html.dark .categories-list a {
        border: 2px solid white;
        color: white;
    }

    .filter-btn:hover {
        background: red;
        color: #fff;
    }

    .filter-active {
        padding: 0.5rem 1rem;
        background: red;
        color: #fff;
        border: 2px solid white;
        border-radius: 25px;
        box-shadow: 0 4px 10px rgba( 0, 0, 0, 0.2 );
    }

    @media ( min-width: 300px ) {
        .projects-grid,
        .filters {
            grid-template-columns: repeat( 1, 1fr );
            padding: 3px 3px;
        }
    }

    @media ( min-width: 768px ) {
        .projects-grid,
        .filters {
            grid-template-columns: repeat( 2, 1fr );
            padding: 3px 3px;
        }
        .icon {
            font-size: 20px;
        }
        .tech-icons {
            height: 15px;
        }
    }

    @media ( min-width: 1024px ) {
        .projects-grid,
        .filters {
            grid-template-columns: repeat( auto-fit, minmax( 350px, 1fr ) );
        }
    }
    </style>
    <?php
}
?>