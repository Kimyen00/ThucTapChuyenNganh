from django.shortcuts import render
from django.shortcuts import render, redirect
# Create your views here.
def index(request):
    return render(request, 'index.html')

def about(request):
    return render(request, 'about.html')

def contact(request):
    return render(request, 'contact.html')

def hoivien(request):
    return render(request, 'hoivien.html')
    
def login(request):
    return render(request, 'login.html')

def service(request):
    return render(request, 'service.html')

def service1(request):
    return render(request, 'service1.html')

def service2(request):
    return render(request, 'service2.html')

def service3(request):
    return render(request, 'service3.html')

def service4(request):
    return render(request, 'service4.html')

def service5(request):
    return render(request, 'service5.html')

def service6(request):
    return render(request, 'service6.html')


def xemphong(request):
    return render(request, 'xemphong.html')

def datphong_thanhcong(request):
    return render(request, 'datphong_thanhcong.html')

def lichsu_datphong(request):
    return render(request, 'lichsu_datphong.html')

def datphong_thanhcong(request):
    return render(request, 'datphong_thanhcong.html')
def admin(request):
    return render(request, 'admin.html')

def customer(request):
    return render(request, 'customer.html')