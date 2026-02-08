# Django Starter Template

A simple Django project template with a working admin panel, home page, and basic configuration.  
Perfect for quickly starting new Django-based web projects.

---

## 🚀 Features

- Django admin panel ready to use
- Basic Bootstrap-based homepage (`base.html`)
- Custom `core` app for main pages
- Easy to extend and customize
- Python 3.13+ compatible

---

## ⚙️ Requirements

- Python 3.10 or higher
- pip (Python package manager)
- Virtual environment (recommended)

---

## 🧩 Installation

1. **Clone or download** the project:

   ```bash
   git clone https://github.com/yourusername/django-template.git
   cd django-template
   ```

2. **Create and activate a virtual environment:**

   ```bash
   python -m venv venv
   # Windows
   venv\Scripts\activate
   # macOS / Linux
   source venv/bin/activate
   ```

3. **Install dependencies:**

   ```bash
   pip install django
   ```

4. **Run migrations:**

   ```bash
   python manage.py migrate
   ```

5. **Create a superuser (admin account):**

   ```bash
   python manage.py createsuperuser
   ```

6. **Start the development server:**

   ```bash
   python manage.py runserver
   ```

7. Open your browser:

   - Home page → [http://127.0.0.1:8000/](http://127.0.0.1:8000/)
   - Admin panel → [http://127.0.0.1:8000/admin/](http://127.0.0.1:8000/admin/)

---

## 🧱 Project Structure

```
django-template/
├── app/
│   ├── settings.py
│   ├── urls.py
│   ├── ...
├── core/
│   ├── views.py
│   ├── urls.py
│   └── templates/
│       └── base.html
├── manage.py
└── db.sqlite3
```

---

## 🧰 Customization

- Modify `core/templates/base.html` for your main layout.
- Add new apps using:

  ```bash
  python manage.py startapp your_app_name
  ```

- Register new apps in `app/settings.py` under `INSTALLED_APPS`.

---

## 🧑‍💻 License

MIT License — feel free to use and modify this template.
