FROM alpine:3.20.0

RUN apk add --no-cache bash
#RUN apt-get update && apt-get install -y cron

COPY ./cron/log_copy.sh /log_copy.sh
COPY ./cron/cronjob /etc/cron.d/cronjob
RUN chmod 0644 /etc/cron.d/cronjob
RUN chmod 777 log_copy.sh
RUN chmod +x log_copy.sh
RUN crontab /etc/cron.d/cronjob

CMD ["crond", "-f"]