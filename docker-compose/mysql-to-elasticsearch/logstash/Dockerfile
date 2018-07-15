FROM logstash:5.5-alpine

ENV PLUGIN_BIN "/usr/share/logstash/bin/logstash-plugin"

RUN "$PLUGIN_BIN" install logstash-input-syslog
#RUN "$PLUGIN_BIN" install logstash-filter-date
#RUN "$PLUGIN_BIN" install logstash-filter-grok
#RUN "$PLUGIN_BIN" install logstash-filter-useragent
#RUN "$PLUGIN_BIN" install logstash-output-elasticsearch

COPY ./conf /etc/logstash
ADD mysql-connector-java-5.1.45-bin.jar /usr/share/logstash/mysql-connector-java-5.1.45-bin.jar 

CMD ["-f", "/etc/logstash/logstash.conf"]
