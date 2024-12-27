#include <iostream>
using namespace std;

class Car {
public:
    string brand;
    void showBrand() {
        cout << "Car brand is: " << brand << endl;
    }
};

int main() {
    // Object is created on the stack
    Car myCar;
    myCar.brand = "Toyota";
    myCar.showBrand(); // Accessible in main
    return 0;
}

include<iostream> 
    using namespace std;

    class Car{
        public:
        int price;
        string brand;

        void carAbout(){
            cout <<"car price is: "<<price<<" and brand is"<<brand;
        }
    }

    int main(){
        car myCar;

        myCar.price=100000;
        myCar.brand="toyota";
        myCar.carAbout;
    }