// Thread program using Try blocak
class A extends Thread {
      public void run()
      {
            try{
                  for(int i=0; i<=5; i++){
                        System.out.println("Hii Thread");
                        Thread.sleep(5000);
                  }
            }
            catch(Exception e){
                  System.out.println(e);
            }
      }
}
public class main_class {
      public static void main(String[] args) throws InterruptedException
      {
            A obj=new A();
            obj.start();
            for(int i=0; i<=5; i++)
            {
                  System.out.println("Show Main Thread");
                  Thread.sleep(5000);
            }
            
      }
      
}
