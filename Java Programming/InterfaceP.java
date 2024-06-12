//import java.util.*;
interface I1{
      void show(); 
}
class A implements I1{
      public void show(){
            System.out.println("This is Interface Program");
      }
}

class interfaceP {
      public static void main(String[] args) {
            A obj=new A();
            obj.show();
      }
      
}
