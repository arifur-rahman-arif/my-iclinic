import { Module } from '@nestjs/common';
import { AppController } from './app.controller';
import { AppService } from './app.service';
import { EventsModule } from './events/events.module';
import { SendMessageModule } from './send-message/send-message.module';

@Module({
  imports: [EventsModule, SendMessageModule],
  controllers: [AppController],
  providers: [AppService],
})
export class AppModule {}
