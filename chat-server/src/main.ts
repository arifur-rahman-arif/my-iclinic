import { NestFactory } from '@nestjs/core';
import { AppModule } from './app.module';
import { createEventAdapter } from '@slack/events-api';

async function bootstrap() {
  const app = await NestFactory.create(AppModule);

  const slackEvents = createEventAdapter('56c54aa861b3b6e39de6d2ed8e4b5658');

  app.use('/events', slackEvents.requestListener());

  await app.listen(5000);
}

bootstrap();
