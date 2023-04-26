import { vote } from "./vote.model";

export class election{
    public id?:Number;
    public Date?:Date;
    public Label?:String;
    public Description?:String;
    public Status?:String;
    public vote?:vote;
}