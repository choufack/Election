import { region } from "./region.model";

export class participant{
    public CNI ?:String;
    public Nom?:String;
    public Prenom?:String;
    public Age?:Number;
    public sexe?:String;
    public Status?:String;
    public region?:region;
    public Login?:String;
    public Mdp?:String;
    public Etat?:Boolean;
    public Email?:String;
    public Telephone?:String;
}