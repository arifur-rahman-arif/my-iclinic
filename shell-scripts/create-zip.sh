#!/bin/sh

which zip || apk add zip

zip -r -1 -9 $CI_PROJECT_TITLE-$CI_COMMIT_TIMESTAMP.zip ./ -x ./src/\* ./shell-scripts/\* ./README.md ./.git/\* ./.* ./tsconfig.json ./webpack.config.js ./yarn.lock ./README.md ./package.json

