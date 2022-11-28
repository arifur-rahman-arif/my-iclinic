import {
  Controller,
  Get,
  Post,
  Body,
  Patch,
  Param,
  Delete,
} from '@nestjs/common';
import { SendMessageService } from './send-message.service';
import { CreateSendMessageDto } from './dto/create-send-message.dto';
import { UpdateSendMessageDto } from './dto/update-send-message.dto';

@Controller('send-message')
export class SendMessageController {
  constructor(private readonly sendMessageService: SendMessageService) {}

  @Post()
  create(@Body() createSendMessageDto: CreateSendMessageDto) {
    return this.sendMessageService.create(createSendMessageDto);
  }

  @Get()
  findAll() {
    return this.sendMessageService.findAll();
  }

  @Get(':id')
  findOne(@Param('id') id: string) {
    return this.sendMessageService.findOne(+id);
  }

  @Patch(':id')
  update(
    @Param('id') id: string,
    @Body() updateSendMessageDto: UpdateSendMessageDto,
  ) {
    return this.sendMessageService.update(+id, updateSendMessageDto);
  }

  @Delete(':id')
  remove(@Param('id') id: string) {
    return this.sendMessageService.remove(+id);
  }
}
