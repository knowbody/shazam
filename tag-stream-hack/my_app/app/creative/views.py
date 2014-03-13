from django.http import HttpResponse
from redis_connection import connection


def red(request):
    content = connection()
    return HttpResponse(content, content_type="application/json")