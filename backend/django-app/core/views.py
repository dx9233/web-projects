from django.shortcuts import render
from django.views.generic import View
from .forms import ContactForm


class HomeView(View):
    template_name = 'base.html'
    
    def get(self, request, *args, **kwargs):
        # Данные для скиллов
        skills = [
            {'name': 'HTML', 'icon': 'svg/html5.svg'},
            {'name': 'CSS', 'icon': 'svg/css3.svg'},
            {'name': 'JavaScript', 'icon': 'svg/JS.svg'},
            {'name': 'TypeScript', 'icon': 'svg/typescript-logo-svgrepo-com.svg'},
            {'name': 'React', 'icon': 'svg/React.svg'},
            {'name': 'Vue', 'icon': 'svg/vue-vuejs-javascript-js-framework-svgrepo-com.svg'},
            {'name': 'Svelte', 'icon': 'svg/svelte-svgrepo-com.svg'},
            {'name': 'Python', 'icon': 'svg/python.svg'},
            {'name': 'PHP', 'icon': 'svg/php.svg'},
            {'name': 'Git', 'icon': 'svg/git-icon-logo-svgrepo-com.svg'},
            {'name': 'Webpack', 'icon': 'svg/webpack-svgrepo-com.svg'},
            {'name': 'Vite', 'icon': 'svg/vite-svgrepo-com.svg'},
            {'name': 'WordPress', 'icon': 'svg/wordpress.svg'},
            {'name': 'Tilda', 'icon': 'svg/tilda.svg'},
            {'name': 'Illustrator', 'icon': 'svg/adobe-illustrator-svgrepo-com.svg'},
            {'name': 'Photoshop', 'icon': 'svg/adobe-photoshop-svgrepo-com.svg'},
            {'name': 'Premiere', 'icon': 'svg/adobe-premiere-svgrepo-com.svg'},
            {'name': 'ChatGPT', 'icon': 'svg/chatgpt.svg'},
        ]
        
        # Данные для проектов
        projects = [
            {
                'title': 'Wishbone+Partners',
                'description': 'Website of an architectural company',
                'technologies': ['HTML', 'CSS', 'WordPress'],
                'live_url': 'https://wishboneportfolio.netlify.app',
                'github_url': 'https://github.com/adamlean/wishboneportfolio'
            },
            {
                'title': 'Luxury Detail',
                'description': 'Car service for premium cars',
                'technologies': ['HTML', 'CSS', 'WordPress'],
                'live_url': 'https://luxurydetail.netlify.app',
                'github_url': 'https://github.com/adamlean/luxurycar_landing'
            },
            {
                'title': 'Car Service',
                'description': 'Car service website',
                'technologies': ['HTML', 'CSS', 'WordPress'],
                'live_url': 'https://carservice-landing.netlify.app',
                'github_url': 'https://github.com/adamlean/carservice_landing'
            },
            {
                'title': 'Gaming Platform',
                'description': 'Website for gamers',
                'technologies': ['HTML', 'CSS', 'WordPress'],
                'live_url': 'https://gamezplatform.netlify.app',
                'github_url': 'https://github.com/dmitrywork92/gameplatforn'
            },
        ]
        
        form = ContactForm()
        
        context = {
            'skills': skills,
            'projects': projects,
            'form': form,
        }
        
        return render(request, self.template_name, context)
    
    def post(self, request, *args, **kwargs):
        form = ContactForm(request.POST)
        if form.is_valid():
            # Обработка формы (можно добавить позже)
            print("Form submitted:", form.cleaned_data)
        
        # После обработки снова показываем страницу с данными
        return self.get(request, *args, **kwargs)