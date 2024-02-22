import java.util.Scanner;

public class laba{
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        String str = sc.nextLine();

        char[] ch = str.toCharArray();
        int c1 = 0;
        int c2 = 0;
        int c3 = 0;

        for(int i =0; i < ch.length; i++){
            switch(ch[i]){
                case '(':
                    c1++;
                    break;
                case ')':
                    c1--;
                    break;    
                case '[':
                    c2++;
                    break;  
                case ']':
                    c2--;
                    break;  
                case '{':
                    c3++;
                    break;  
                case '}':
                    c3--;
                    break;
            }
        }
        
        if(c1 == 0 &&  c2 == 0 && c3 == 0 ){
            System.out.println("Последовательность скобок верна");
        }else{
            System.out.println("Неправильная последовательность скобок");
        }
    }
}