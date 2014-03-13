import json
import redis
from app import settings


# conncetion with Redis: print m['data'] prints all data in real time
def connection():
    rc = redis.Redis(host=settings.REDIS_HOSTNAME, port=settings.REDIS_PORT, db=0)
    pubsub = rc.pubsub()
    pubsub.subscribe('tags')

    for m in pubsub.listen():
        print m