#include <iostream>
#include<conio.h>
using namespace std;

//len_list:--------------------------------------------------------
 int seq_search (int ,int);
 int arr1[100] ;
 int found = false;
//liner_functin:
int seq_search (int n,int searchkey)
    {
     int pos=0;
      do
         {
          if (arr1[pos]==searchkey)
            found=true;
          else
			 pos++;
          }
        while (! found && pos <= n) ;
                    return pos;
    }

//bin_list:-------------------------------------------------------------
int bin_search(int,int);
int arr[]={5,7,13,22,28,43,57,65,78,87,90,95 , 20 ,100 ,150 ,55};
//enum boolean {false,true};
int found1 = false;

//bin_funcion:
int bin_search(int N,int searchkey1)
 {
    int first=1,last= N , mid;
    do
     {
       mid= (first + last)/2;
       if (arr[mid]==searchkey1)
	  found1=true;
       else
	  {
			 if (arr[mid]>searchkey1)
	     last=mid-1 ;
	  else
	     first=mid+1;
	  }
     }
    while (!found1 &&last >= first)  ;
    return mid;
}
//insert_funcion:-----------------------------------
void inserSort(int arr[], int  n) {
	int key, j;                //0   1  2  3  4  5  6
	for (int i = 1; i < n; i++)//80  80|90 30 50 70 40
	{
		key = arr[i];//60
		j = i - 1;//0

    while (j >= 0 && arr[j] > key)
      {
         arr[j + 1] = arr[j];
         j = j - 1;
      }
		 arr[j + 1] = key;//90
	}
}
//print_insertlist:
void printArray(int arr[], int n){

    cout<<"sorted list: \n";
	for (int i = 0; i < n; i++)
	{
     cout << arr[i] << "   ";
      //cout << endl;
	}
}

//Seection_list:-------------------------------------------------
void selection_sort();
int array1[] = {20 , 15 , 8 , 44, 24, 17 , 4 ,30 , 16 ,10, 22,45 ,55 ,80 ,5} , N = 15;//listt
//Selection_funcion:
void selection_sort()
{
   int temp , min;
   for(int i = 0 ;i < N -1 ; i++)
      {
         min = i;
   for(int j = i+1 ; j < N ; j++)

   if(array1[j] < array1[min])
     min = j;
     temp = array1[i];
     array1[i] = array1[min];
     array1[min] = temp;
     }

}
//Bubbul_list:----------------------------------------------------
void bubble_sort();
int arr2[]={54,57,48,30,12,92,86,33 ,2,125 , 18 , 14, 55, 20 ,10},N1=15;//bub_list
//Function bubbul_sort:
void bubble_sort()
{
  for(int out=N-1;out>1;out--)

  for (int in=0;in<out;in++)

  if (arr2[in]>arr2[in+1])
    {
        int temp=arr2[in] ;
        arr2[in]=arr2[in+1];
        arr2[in+1]=temp;
    }
}

//list_Quicksotr:-----------------------------------
void  QSort(int , int);
int arr3[]={33,86,92,12,37,48,57,25, 34,5 ,18 , 20 ,50 ,100 , 66},N2=15;//q_list

//Quick_sort
void QSort(int First,int Last)
{
   int P,L,R,Temp;
   L = First;
   R = Last;
   int Mid=(First+Last)/2+1;
   P = arr3[Mid];
   while (L<=R)
   {
      while(arr3[L]<P)
         L++;
      while (arr3[R] > P)
         R--;
      if (L<=R)
      {
         Temp=arr3[L];
         arr3[L]=arr3[R];
         arr3[R]=Temp;
         L=L+1;
         R=R-1;
      }
   }
   if (First<R)
      QSort(First,R);
   if (L<Last)
      QSort(L,Last);
}
//Queue----------------------------------------------------
int Queue[5] = {-1,-1,-1,-1,-1};
int Front = -1;
int Rear = -1;

bool isEmpty(){
   if (Front<0 || Front>Rear){
     cout<<"Queue is empty...!?\n\n\n";
     return true;
   }else
      return false;
}

bool isFull(){
    if(Rear==4){
        cout<<"Queue is full..!?\n\n\n";
        return true;
    }else
    return false;
}
//show
void display(){
    if(isEmpty()==false){
         for( int i=Rear;i>=0;i--){
            cout<<Queue[i];
            if(i==Rear)cout<<"<--Rear";
            if(i== Front)cout<<"<--Front";
            cout<<endl;
         }
    }
}
//insert:
bool Enqueue(int element){
    if(isFull()==false){
        Rear++;
        Queue[Rear]=element;
        if(Rear==0)Front=0;
        return true;
    }else
      return false;
}
//delete
int Dequeue(){
    int element=-1;
    if(isEmpty()==false){
        element= Queue[Front];
        Front++;
    }
    return element;
}
//Stack:-----------------------------------------------------------------
#define size 10
int stack[size],top = -1;
//������ ������
void push(int value )
{
   if(top == size -1){
    cout<<"stack overflow...!?"<<endl;

   }
   else{
    top++;
    stack[top] = value;
   }
}
//��� �� ������
int pop (){
if(top == -1){
cout<<"stack underflow...!? "<<endl;
 }else{
   return stack[top--];
   }
}
//��� ���� �������
int peek(){
if(top== -1){
 cout<<"stack underflow...!? "<<endl;
}
else{
  return stack[top];
 }
}
//��� ������
void displays(){
if(top== -1){
 cout<<"stack underflow..!?"<<endl;
}
else{
    for(int i =top ;i>=0;i--){
        cout<<stack[i]<<endl;
    }
  }
}
int main()
{
    int correct = true;
    int op1 = true;
    int op2 = true;
    int opcion;
    int opcion1;
    int choice;
    int ar[] = { 80, 90, 60, 30, 50, 70, 40 ,30 ,20 ,10 ,5 , 2 ,1,12, 55  };//insert_list
    int n = 15;//size of Lnset__sort:
    int n1 =15 ;//size of Lnset__sort:
    int skey;
    int position;
    int nn = 10;//size of liner_list:
    int NN=16;//size of Bin_list:
    int middle;
    int skey1;
    int command;
    int element = -1;
    int oop = true;
      do
	  {     cout<<"**************MAIN*PAGE*****************"<<endl;
            cout << " 1: For Searching Algorithms: .." << endl;
            cout << " 2: For Sortting Algroithms .....:" << endl;
            cout << " 3: For Stack Algorithms.......... :" << endl;
            cout << " 4: For Queue Algorithms..... ..... :" << endl;
            cout << " 0: to To Exit: " << endl;
            cout<<endl;
            cout << "Enter your choice...\n " ;
            cout<<"> ";
            cin >> choice;
            switch (choice)
            {
              case 1:
                do
                  {
                  cout<<endl;
                  cout<<"******************SEARCH *Algorithms*****************"<<endl;
                  cout<<"1: For leaner Search:...... "<<endl;
                  cout<<"2: For Binary Search: ....."<<endl;
                  cout <<"0: To Exit: " << endl;
                  cout<<endl;
                  cout<<"Enter your choice...\n";
                  cout<<"> ";
                  cin>>opcion;
                  cout<<"> ";
                  switch(opcion)
                    {
                    case 1:
                            cout<<"\n";
                            cout<<"liner_sort....\n";
                            cout<<"===========\n\n" ;
                            cout <<"\nEnter  Ten Numbers and Search..."<<endl;
                            cout<<"> ";
                            for (int j=0; j<nn; j++)
                              {
                             cin>>arr1[j];
                               }
                             cout<<"\nEnter The Search Key..."<<"\n";
                             cout<<"> ";
                             cin>> skey;
                              position = seq_search(nn,skey);
                             cout<<" \nKey: " <<skey<<"\n";
                             if (found)
                                 cout<<"\nKey Found At: " <<(position)<<endl;
                                else
                                  cout<< "\nKey Not Found: "<<endl;

                            break;
                      case 2:

                            cout<<"\nBin_Sort";
                            cout<<"\n===========\n\n" ;
                            cout<<"Bin_List..."<<endl;
                            for (int j=0;j<NN;j++)
                            cout<<arr[j]<<" ";
                            cout<<"\nEnter The Target... \n";
                            cout<<"> ";
                            cin>> skey1;

                            middle=bin_search(NN,skey1);
                            cout<<"\nKey :" <<skey1<<"\n";
                            if (found1)
                               {
                            cout<<"\nKey Found At: "
                                <<(middle-1)<<endl;
                              }
                            else
                            cout<<"\nKey Not Found: "<<endl;
                            break;

                      case 0:
                            op1 = false;
                            break;
                      default:
                            cout << "Please Enter The Correct Figure:!!!?\n";
                            break;
                        }
                    }while(op1 != false);
          case 10:
                     break;
         case 2:
                 do {
                      cout<<endl;
                      cout<<"**********************SORT Algorithms**********************\n";
                      cout<<"1:  For Insert_sort: "<<endl;
                      cout<<"2:  For Selection_sort: "<<endl;
                      cout<<"3:  For Bubbul_sort: "<<endl;
                      cout<<"4:  For Quick_sort: "<<endl;
                      cout <<"0: To Exit: " << endl;
                      cout<<endl;
                      cout<<"Enter your choice...\n";
                      cout<<"> ";
                      cin>>opcion1;
                      switch(opcion1){
                case 1:
                        cout<<"\n";
                        cout<<"insert_sort\n";
                        cout<<"===========\n" ;
                         cout<<"list: \n";
                        for (int j = 0; j < n1; j++)
                        {
                         cout << ar[j] << "   ";
                        }
                        cout<<endl;
                        n = sizeof(ar) / sizeof (ar[0]);
                        inserSort(ar, n1);
                        printArray(ar, n1);
                        cout<<endl;
                        break;
                case 2:
                        cout<<"\n";
                        cout<<"selection_sort\n";
                        cout<<"===========\n" ;
                        cout<<"\nOriginal list: "<<endl;
                        for(int j = 0 ; j< N ; j++)
                            cout<<array1[j]<<"   ";
                        selection_sort();
                            cout<<"\nSorted list :\n";
                        for(int h = 0 ; h < N; h++)
                           cout<<array1[h]<<"   ";
                           cout<<endl;
                         break;
                case 3:
                        cout<<"\n";
                        cout<<"Bubbul_sort\n";
                        cout<<"===========\n" ;
                        cout<<"\nAcule List: \n" ;
                        for (int j=0;j<N1;j++)
                            cout<<arr2[j]<<"    ";
                        bubble_sort();
                        cout<<"\nSorted List(Ascending Order) : \n" ;
                        for (int i=0;i<N1;i++)
                            cout<<arr2[i]<<"    ";
                            cout<<endl;
                        break;
                case 4:
                        cout<<"\n\n";
                        cout<<"You new in the Q_sort\n";
                        cout<<"\nQuick Sort :" ;
                        cout<<"\n===========\n" ;
                        cout<<"Acual List: \n" ;
                        for (int j=0;j<N2;j++)
                            cout<<arr3[j]<<"    ";
                        QSort(0,N2-1);
                        cout<<"\nSorted List : \n" ;
                        for (int i=0;i<N2;i++)
                            cout<<arr3[i]<<"    ";
                            cout<<endl;
                        break;
                case 0:
                        op2 = false;
                        break;
                default:
                        cout << "Please Enter The Correct Figure:!!!?\n";
                         break;
                       }
                    }while(op2 != false);
          case 11:
                     break;
        case 3:
               cout<<"********This is stack algorethms*******"<<endl;
                push(20);
                push(10);
                push(120);
                push(14);
                push(200);
                push(33);
                push(5);
                push(77);
                push(44);
                push(99);
                displays();
                cout<<endl;
                pop();
                pop();
                pop();
               cout <<peek()<<"<--top\n"<<endl;
               displays();
                break;
        case 12:
                    break;
        case 4:
                   do{
                        cout<<"****Queue Operations:****"<<endl;
                        cout<<"1. is_Empty..."<<endl;
                        cout<<"2. is_Full..."<<endl;
                        cout<<"3. Ensert_Queue..."<<endl;
                        cout<<"4. Delete_Queue..."<<endl;
                        cout<<"5. Show_Queue..."<<endl;
                        cout<<"0. Exit..."<<endl;
                        cout<<"Enter Number for Operation:"<<endl;
                        cout<<"> ";
                        cin>>command;
                        switch(command){
                        case 1:
                            if(isEmpty() ==false){cout<<"Queue is not empty\n\n\n";}
                            break;
                        case 2:
                            if(isFull()==false){
                                cout<<" Queue is not full\n\n\n";
                            }
                            break;
                        case 3:
                              cout<<"Enter Element of Queue: "<<endl;
                              cout<<"Max_size = 10"<<endl;
                              cout<<"> ";
                              cin>>element;
                              if (Enqueue(element)==true) display();
                              cout<<endl<<endl;
                            break;
                        case 4:
                              element=Dequeue();
                              if(element>=0)cout<<element<<"<-- Delete_Queue\n\n\n";
                              display();
                              cout<<endl<<endl;
                            break;
                        case 5:
                              display();
                              cout<<endl<<endl;
                            break;
                        case 0:
                             oop = false;
                             break;
                        default:
                            cout<<"Please Enter The Correct Figure:!!!?"<<endl;
                            break;
                        }
                   }while(oop != false);
        case 5:
            break;

        case 0:
               cout<<"***********Thank You For Using Your Program************"<<endl;
               cout << "************************good bye*********************** ";
               correct = false;
               break;

        default:
            cout << "Please Enter The Correct Figure:!!!?\n";
            cout<<endl;
            break;
      }

   }while (correct != false);
}
