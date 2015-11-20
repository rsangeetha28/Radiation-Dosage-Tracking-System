import urllib.request
import urllib.parse
import xlrd

workbook = xlrd.open_workbook('C:/Users/Sangeetha/Desktop/pinsert.xlsx')
worksheet = workbook.sheet_by_index(0)

r = worksheet.row(0) #returns all the CELLS of row 0,
c = worksheet.col_values(0) #returns all the VALUES of row 0,

data=[]
for i in range(worksheet.nrows):
    #print(worksheet.row_values(i))
    if i >= 1:
        data = worksheet.row_values(i)
        params = urllib.parse.urlencode({'fname': data[0], 'lname': data[1], 'exp': data[2]})
        binary_data = params.encode('utf-8')
        f = urllib.request.urlopen("http://sweb.uky.edu/~sra258/Chart/samples/insertpy.php", binary_data)