#include<iostream>
#include<string>
#include<sstream>
using namespace std;

	struct Hewan
	{
		string hewan;
		int harga;
	}hn1[3];

void printhn(Hewan hn);

int main ()
{
     string peliharaan;
     int x;
             for(x=0; x<3;x++)
             {
             cout<<"Masukkan Nama Hewan : ";
             getline(cin,hn1[x].hewan);
             cout<<"Masukkan Harga : Rp.";
             
             getline(cin,peliharaan);
             stringstream(peliharaan)>>hn1[x].harga;                    }
             
       cout<<"\nHewan yang Telah Diinput :\n";
       for(x=0;x<3;x++)
       printhn(hn1[x]);   
     
return 0;

}

void printhn(Hewan hn)
{
	cout<<hn.hewan<<"\t";
	cout<<"\tRp. "<<hn.harga<<",-\n";
}

