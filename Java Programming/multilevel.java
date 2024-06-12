class Diploma{
      void show(){
            System.out.println("CSE");
      }
}
 class Java extends Diploma{
      void get(){
            System.out.println("Java Programming Lab");
            
      }
 }
 class Subject extends Diploma{
      void Student(){
            System.out.println("Today Strenth is 16");
      }
 }
public class multilevel {
      public static void main(String[] args) {
            Subject obj=new Subject();
            obj.show();
            Java obj1 = new Java();
            obj1.get();
            obj.Student();


      }
      
}
