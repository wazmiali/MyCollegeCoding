abstract class A{
      abstract void show();
      abstract void get();
}
class B extends A{
      void show(){
            System.out.println("Java");
      }
      void get(){
            System.out.println("Programming");
      }
}
class Abstract_example{
      public static void main(String[] args) {
            B obj=new B();
            obj.show();
            obj.get();
      }
}