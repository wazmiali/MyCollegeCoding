public class FibonacciExample {
      public static void main(String[] args) {
          int n = 10; 
          int firstNumber = 0, secondNumber = 1;
  
          System.out.println("First " + n + " Fibonacci numbers:");
  
          for (int i = 0; i < n; i++) {
              System.out.print(firstNumber + " ");
  
              int nextNumber = firstNumber + secondNumber;
              firstNumber = secondNumber;
              secondNumber = nextNumber;
          }
      }
  }
  