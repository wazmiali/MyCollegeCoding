public class FunctionOverloading {
      void show() {
          System.out.println("Java");
      }
  }
  
  class B {
      void show() {
          System.out.println("Programming");
      }
  }
  
  public class Main{
      public static void main(String[] args) {
          
          FunctionOverloading obj = new FunctionOverloading();  
          
          obj.show();          
          B objB = new B();          
          objB.show();
      }
  }
  
