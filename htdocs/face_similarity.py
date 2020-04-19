import face_similarity_api as FSA

# CHOICE = int(input("Choose 1:Single Pair Checking\nChoose"
#                    "2:Multiple Pair Checking From Folder\n"))
# if CHOICE == 1:
#     PERSON_NAME = input("Enter Path of Person Image : ")
#     DOCUMENT_NAME = input("Enter Path of Document Image : ")
#     N = int(input("Choices :\n1.Document Gender\n2.Person Gender\n"
#                   "3.Both\n4.None\n"))
PERSON_NAME="C:/xampp/htdocs/f1.jpg"
DOCUMENT_NAME="C:/xampp/htdocs/f2.jpg"
FSA.compare(PERSON_NAME, DOCUMENT_NAME, 4)
# elif CHOICE == 2:
#     FSA.start()
