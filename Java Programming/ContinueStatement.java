//Write a program in java Continue Statement 
public class ContinueStatement {
      public static void main(String[] args){
            for(int i=0; i<=2; i++){
                  for(int j=1; j<=5; j++){
                        if(i==4){
                              continue;
                        }
                        System.out.println(j);
                  }
            }
      }
      
}
