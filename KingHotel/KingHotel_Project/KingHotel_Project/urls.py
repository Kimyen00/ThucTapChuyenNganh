"""
URL configuration for KingHotel_Project project.

The `urlpatterns` list routes URLs to views. For more information please see:
    https://docs.djangoproject.com/en/5.2/topics/http/urls/
Examples:
Function views
    1. Add an import:  from my_app import views
    2. Add a URL to urlpatterns:  path('', views.home, name='home')
Class-based views
    1. Add an import:  from other_app.views import Home
    2. Add a URL to urlpatterns:  path('', Home.as_view(), name='home')
Including another URLconf
    1. Import the include() function: from django.urls import include, path
    2. Add a URL to urlpatterns:  path('blog/', include('blog.urls'))
"""

from django.contrib import admin
from django.urls import path
from KingHotel_app import views
urlpatterns = [
    path("admin/", admin.site.urls),
    path("",views.index,name='index'),
    path("about",views.about,name='about'),
    path("contact",views.contact,name='contact'),
    path("hoivien",views.hoivien,name='hoivien'),
    path("login",views.login,name='login'),
    path("service",views.service,name='service'),
    path("service1",views.service1,name='service1'),
    path("service2",views.service2,name='service2'),
    path("service3",views.service3,name='service3'),
    path("service4",views.service4,name='service4'),
    path("service5",views.service5,name='service5'),
    path("service6",views.service6,name='service6'),
    path("xemphong",views.xemphong,name='xemphong'),

]
