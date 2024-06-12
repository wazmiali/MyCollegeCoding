public class exception {
      public static void main(String[] args) {
            try{                                //to use try block in this exception code

                  System.out.println("1");
                  System.out.println("2");    
                  System.out.println("3");
                  System.out.println(100/0);                  
            }
            catch(ArithmeticException k)
            {
                  System.out.println("5");
            }
      }
      
}


