import { bulletin } from "./bulletin.model";
import { election } from "./election.model";
import { participant } from "./participant.model";

export class vote{
    public id?:Number;
    public Date?:Date;
    public Participant?:participant;
    public bulletin?:bulletin;
    public Election?:election;
    
}