#include <iostream>
using namespace std;
int main()
{
	int data[50];
	int n,i;
	
	cout<<"Program Input Data"<<endl;
	cout<<"Masukan Jumlah Data: ";
	cin>>n;
	cout<<endl;
	
	for(i=1;i<=n;i++)
	{
		cout<<"Masukan Data"<<i<<":";
		cin>>data[i];
	}
	
	cout<<"Data yang di Masukan: ";
	cout<<endl;
	
	for(i=1;i<=n;i++)
	{
		cout<<""<<data[i]<<endl;
	}
	
	return 0;
}
