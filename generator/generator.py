#Generates txt files with instructions for affiliate marketing program members

#Accept range of referral ids as input
while True:
    try:
        start = int(input("Enter the number you want as the lowest (start) of referral ids: "))
    except:
        print("ERROR: Please, enter an integer.")
        continue
    else:
        break
while True:
    try:
        end = int(input("Enter the number you want as the highest (start) of referral ids: "))
    except:
        print("ERROR: Please, enter an integer.")
        continue
    else:
        break

#Open and read template file
file = open ("original.txt")
string = file.read()

refnumber = start - 1
endref = end + 1

#Write instructions for each referral id  and store in separate file in the 'messages' directory
while (refnumber <= 499):
	refnumber = refnumber + 1
	refid = "Refid" + str (refnumber)
	new_string_1 = string.replace("[refid]", refid)
	new_string = new_string_1.replace("refnumber", str (refnumber))
	new_file = open ((f"messages/{refid}.txt"), "w")
	new_file.write(new_string)
	new_file.close()
file.close()

print("All files created and stored in the 'messages' directory.")