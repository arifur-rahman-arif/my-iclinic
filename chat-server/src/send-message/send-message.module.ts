import { Module } from '@nestjs/common';
import { SendMessageService } from './send-message.service';
import { SendMessageController } from './send-message.controller';

@Module({
  controllers: [SendMessageController],
  providers: [SendMessageService],
})
export class SendMessageModule {}
