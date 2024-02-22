#include<iostream>
#include <Windows.h>
#include<conio.h>
#include<string.h>
#include<algorithm>
#include<iterator>
using namespace std;
int main()
{
    SetConsoleOutputCP(1251);
    SetConsoleCP(1251);
    char mak[20];
    int y=0;
    cout << "Введите слово: ";
    cin >> mak;
    string s = mak, s1;
    cout << "Введите число: ";
    do 
        cin >> y;
    while (y > strlen(mak));
    y--;
    for (int i = 0; i <= y; i++) 
    {
        if (i == y)
        {
            cout << mak[i] << endl;
            remove_copy(s.begin(), s.end(), back_inserter(s1), mak[i]);
            cout << s1;
        }
    }
    return 0;
}