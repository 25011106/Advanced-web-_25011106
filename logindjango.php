# views.py
from django.shortcuts import render, redirect
from django.contrib.auth import authenticate, login
from django.contrib import messages
from django.contrib.auth.decorators import login_required
from django.views.decorators.csrf import csrf_protect

@csrf_protect
def login_view(request):
    if request.method == 'POST':
        username = request.POST.get('username')
        password = request.POST.get('password')
        
        user = authenticate(request, username=username, password=password)
        if user is not None:
            login(request, user)
            return redirect('dashboard')  # Redirect to dashboard or desired page
        else:
            messages.error(request, 'Invalid username or password.')
    
    return render(request, 'login.html')

@login_required
def dashboard_view(request):
    return render(request, 'dashboard.html')

# urls.py
from django.urls import path
from . import views

urlpatterns = [
    path('login/', views.login_view, name='login'),
    path('dashboard/', views.dashboard_view, name='dashboard'),
]

# settings.py (add these to your existing settings)
LOGIN_URL = '/login/'
LOGIN_REDIRECT_URL = '/dashboard/'

# templates/base.html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{% block title %}Login{% endblock %}</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .crown-icon {
            background: #ffd700;
            color: #333;
            width: 50px;
            height: 50px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 30px;
            font-size: 24px;
        }

        .login-header {
            margin-bottom: 30px;
        }

        .user-icon {
            background: #4285f4;
            color: white;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 24px;
        }

        .login-title {
            color: #333;
            font-size: 24px;
            font-weight: 300;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
            position: relative;
        }

        .form-input {
            width: 100%;
            padding: 15px 20px;
            border: 2px solid #e1e5e9;
            border-radius: 8px;
            font-size: 16px;
            transition: all 0.3s ease;
            background: white;
        }

        .form-input:focus {
            outline: none;
            border-color: #4285f4;
            box-shadow: 0 0 0 3px rgba(66, 133, 244, 0.1);
        }

        .form-input::placeholder {
            color: #9aa0a6;
        }

        .login-button {
            width: 100%;
            padding: 15px;
            background: #4285f4;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .login-button:hover {
            background: #3367d6;
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(66, 133, 244, 0.3);
        }

        .login-button:active {
            transform: translateY(0);
        }

        .error-message {
            background: #fee;
            color: #c53030;
            padding: 10px;
            border-radius: 8px;
            margin-bottom: 20px;
            border-left: 4px solid #c53030;
        }

        .forgot-password {
            margin-top: 20px;
        }

        .forgot-password a {
            color: #4285f4;
            text-decoration: none;
            font-size: 14px;
        }

        .forgot-password a:hover {
            text-decoration: underline;
        }

        @media (max-width: 480px) {
            .login-container {
                margin: 20px;
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>
    {% block content %}
    {% endblock %}
</body>
</html>

# templates/login.html
{% extends 'base.html' %}

{% block content %}
<div class="login-container">
    <div class="crown-icon">
        <i class="fas fa-crown"></i>
    </div>
    
    <div class="login-header">
        <div class="user-icon">
            <i class="fas fa-user"></i>
        </div>
        <h2 class="login-title">Login</h2>
    </div>

    {% if messages %}
        {% for message in messages %}
            <div class="error-message">
                {{ message }}
            </div>
        {% endfor %}
    {% endif %}

    <form method="post">
        {% csrf_token %}
        <div class="form-group">
            <input 
                type="text" 
                name="username" 
                class="form-input" 
                placeholder="Username"
                required
            >
        </div>
        
        <div class="form-group">
            <input 
                type="password" 
                name="password" 
                class="form-input" 
                placeholder="Password"
                required
            >
        </div>
        
        <button type="submit" class="login-button">
            Login
        </button>
    </form>

    <div class="forgot-password">
        <a href="#">Forgot your password?</a>
    </div>
</div>
{% endblock %}

# templates/dashboard.html
{% extends 'base.html' %}

{% block title %}Dashboard{% endblock %}

{% block content %}
<div class="login-container">
    <div class="crown-icon">
        <i class="fas fa-crown"></i>
    </div>
    
    <div class="login-header">
        <div class="user-icon">
            <i class="fas fa-check"></i>
        </div>
        <h2 class="login-title">Welcome!</h2>
    </div>

    <p style="margin-bottom: 20px; color: #666;">
        Hello, {{ user.username }}! You have successfully logged in.
    </p>

    <a href="{% url 'login' %}" class="login-button" style="display: inline-block; text-decoration: none;">
        Logout
    </a>
</div>
{% endblock %}

# forms.py (Optional - for form validation)
from django import forms
from django.contrib.auth.forms import AuthenticationForm

class CustomLoginForm(AuthenticationForm):
    username = forms.CharField(
        max_length=254,
        widget=forms.TextInput(attrs={
            'class': 'form-input',
            'placeholder': 'Username',
            'required': True,
        })
    )
    password = forms.CharField(
        widget=forms.PasswordInput(attrs={
            'class': 'form-input',
            'placeholder': 'Password',
            'required': True,
        })
    )

# Alternative view using Django's built-in LoginView
from django.contrib.auth.views import LoginView
from django.urls import reverse_lazy

class CustomLoginView(LoginView):
    template_name = 'login.html'
    form_class = CustomLoginForm
    success_url = reverse_lazy('dashboard')
    
    def form_invalid(self, form):
        messages.error(self.request, 'Invalid username or password.')
        return super().form_invalid(form)

# Alternative URL configuration using class-based view
# urlpatterns = [
#     path('login/', CustomLoginView.as_view(), name='login'),
#     path('dashboard/', views.dashboard_view, name='dashboard'),
# ]