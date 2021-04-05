from selenium import webdriver

#Script to response arithmetic question on arithmetic.zetamac.com..
#https://arithmetic.zetamac.com/game?key=72740d67 refeer to 30s test
#enjoy yourself!
#This script was make on linux 64 bits and depend of a driver browser, in this classe
#i use the chrome driver, that can be downloaded here: https://chromedriver.chromium.org/downloads

driver=webdriver.Chrome('/home/ser/Documents/Development/DriversToBrowser/80-0-3987-16/Chrome/chromedriver')
class Bot1:



	def open(self, url):
		driver.maximize_window()
		driver.get(url)

	def clickAndTypeFromClass(self,x,y):
		driver.find_element_by_class_name(x).click()
		driver.find_element_by_class_name(x).send_keys(y)

	def getTxtFromClass(self,x):
		return driver.find_element_by_class_name(x).text

	def parsprob(self,x):
		a=[]
		b=[]
		Op=0
		c=-1
#include bookmarks to find elements:
		p1=x.index(' ')
		p2=x.index(' ',p1+1)
		print("break:"+str(p1)+str(p2))
		print(x)
		for i in range(0,p1):
			a.append(x[i])

		for i in range(p2+1,len(x)):
			b.append(x[i])

		for i in x:
			if i=='÷':
				Op='d'
			if i=='×':
				Op='m'
			if i=='–' or i=='+':
				Op=i

		print(Op)

		print(a,b)

		a1=""
		b1=""

		for i in a:
			a1=a1+str(i)
		for i in b:
			b1=b1+str(i)
		aint=int(a1)
		bint=int(b1)
		if Op=='–':
			print(aint-bint)
			return int(aint-bint)
		if Op=='+':
			print(aint+bint)
			return int(aint+bint)
		if Op=='m':
					print(aint*bint)
					return int(aint*bint)
		if Op=='d':
			print(aint/bint)
			return int(aint/bint)

#Fim da classe, iniciando script...

print('Iniciando script')

x1=Bot1()

x1.open('https://arithmetic.zetamac.com/game?key=72740d67')

def rept(x1):
#get Problem
	probl=x1.getTxtFromClass("problem")
#Resolution
	resol=x1.parsprob(probl)
#send answer...
	x1.clickAndTypeFromClass('answer',resol)

c=''
while len(c)<1:
	rept(x1)
