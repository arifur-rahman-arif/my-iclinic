import { Injectable } from '@nestjs/common';
import { CreateSendMessageDto } from './dto/create-send-message.dto';
import { UpdateSendMessageDto } from './dto/update-send-message.dto';
import { WebClient } from '@slack/web-api';

@Injectable()
export class SendMessageService {
  create(createSendMessageDto: CreateSendMessageDto) {
    return 'This action adds a new sendMessage';
  }

  findAll() {
    const web = new WebClient(
      'xoxb-2831008110901-4410550156929-FpkXLiTMMe5jkHtVqIX2Knb0',
    );

    web.chat.postMessage({
      channel: 'C047SL2SW22',
      text: "Ok. than I'll do my research on it later. Probably I can figure out something that these platform have not done it yet",
    });

    return `This action returns all sendMessage`;
  }

  findOne(id: number) {
    return `This action returns a #${id} sendMessage`;
  }

  update(id: number, updateSendMessageDto: UpdateSendMessageDto) {
    return `This action updates a #${id} sendMessage`;
  }

  remove(id: number) {
    return `This action removes a #${id} sendMessage`;
  }
}
