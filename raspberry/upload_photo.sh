#!/bin/sh

rm -f /tmp/webcam.jpg

fswebcam -c /etc/webcam.cfg

curl \
  -F "image=@/tmp/webcam.jpg" \
  http://SERVER/DIR/webcam.php

