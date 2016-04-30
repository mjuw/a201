from django.shortcuts import render
import time;

def index(request):
    localtime = time.asctime( time.localtime(time.time()) )
    context = { 'localtime': localtime };
    return render(request, 'index.html', context)

