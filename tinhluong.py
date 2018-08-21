import time
class Staff:
    def __init__(self, personal, grade = 0):
        self.code = personal['code']
        self.name = personal['name']
        self.birthday = personal['birthday']
        self.entrance_day = time.strptime(personal['entrance_day'], "%d %m %Y")
# Personal ['entrance_day']  is like "20 01 2010"
        self.grade =grade   #grade : 0 -worker, 1 - manager
        self.workingday = 0  # number of working days this month
        self.products = 0    #quantity of products the worker has made this
    def salary(self):
        if self.grades == 0:
            return self.products*10000
        else:
            return self.workingday*300000
    def bonus(self, day = None):
        if self.grade == 0:
            return 2*self.salary()
        else:
            if day != None:
                try:
                    today = time.strptime(day, "%d %m %Y")
                except ValueError:
                    print("Please give a day in format: dd mm yyy")
                    return
            else:
                today = time.localtime()
            return(today[0] - self.entrace_day[0]*salary())
p = {
    'code': 200021,
    'name' : 'Nguyen Văn Teo',
    'birthday': '28 02 1990',
    'entrance_day': '31 09 2001'
    }
nv = Staff(p, 1)
nv.workingdays = 20
print("The salary of", nv.name, 'is' ,nv.salary())
print("The bonus is ", nv.bonus())
               
