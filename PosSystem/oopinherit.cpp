#include <iostream>
using namespace std;

// Base Class
class Employee
{
    int id;
    float salary;

public:
    Employee(int empId)
    {
        id = empId;
        salary = 54.0;
    }
};

// Derived Class Syntax and creating class
class Programmer : public Employee

                   int
                   main()
{
    Employee harry(1), rohan(2);
    cout << harry.salary << endl;
    cout << rohan.salary << endl;
    return 0;
}