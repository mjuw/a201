from django.shortcuts import render
from django.utils import timezone

def index(request):
    sometime = timezone.localtime(timezone.now())
    context = {'sometime': sometime};
    return render(request, 'index.html', context)

