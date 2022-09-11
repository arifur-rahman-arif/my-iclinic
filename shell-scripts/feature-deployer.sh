if [ "$CI_MERGE_REQUEST_TARGET_BRANCH_NAME" == "staging" ]; then
	ssh $SERVER_USER@$STAGING_SERVER_IP "docker login -u $PERSONAL_ACCESS_TOKEN_NAME -p $PERSONAL_ACCESS_TOKEN_KEY $CI_REGISTRY"
else
	ssh $SERVER_USER@$SERVER_IP "docker login -u $PERSONAL_ACCESS_TOKEN_NAME -p $PERSONAL_ACCESS_TOKEN_KEY $CI_REGISTRY"
fi

if [ "$CI_MERGE_REQUEST_TARGET_BRANCH_NAME" == "staging" ]; then
	ssh $SERVER_USER@$STAGING_SERVER_IP "docker pull $TAG_LATEST_CLIENT"
else
	ssh $SERVER_USER@$SERVER_IP "docker pull $TAG_LATEST_CLIENT"
fi

if [ "$CI_MERGE_REQUEST_TARGET_BRANCH_NAME" == "staging" ]; then
	ssh $SERVER_USER@$STAGING_SERVER_IP "docker container rm -f client || true"
else
	ssh $SERVER_USER@$SERVER_IP "docker container rm -f client || true"
fi

if [ "$CI_MERGE_REQUEST_TARGET_BRANCH_NAME" == "staging" ]; then
	ssh $SERVER_USER@$STAGING_SERVER_IP "docker run -d -p 80:80 --name client $TAG_LATEST_CLIENT"
else
	ssh $SERVER_USER@$SERVER_IP "docker run -d -p 80:80 --name client $TAG_LATEST_CLIENT"
fi