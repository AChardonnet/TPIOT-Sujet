#include <WiFi.h>
#include <PubSubClient.h>
#include <ArduinoJson.h>
#include <DHT.h>
#include <time.h>
#include <stdint.h>
#include "credentials.h"
#include "conf.h"
#include "edge.h"

void setup() {
    Serial.begin(115200);
}

void loop() {
    Serial.printl("Hello World !");
    delay(2000);
}