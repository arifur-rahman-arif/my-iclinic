import { PartialType } from '@nestjs/mapped-types';
import { CreateSendMessageDto } from './create-send-message.dto';

export class UpdateSendMessageDto extends PartialType(CreateSendMessageDto) {}
