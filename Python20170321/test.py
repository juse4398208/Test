score_array = {}
score_f = open("score.txt")
for line in score_f:
    (name,score)=line.split()
    float(score)
    score_array[score]=name
score_f.close() 
# score_array.sort()
# score_array.reverse()
for key in sorted(score_array.keys()):
    print("surfer: "+ score_array[key]+ " scored "+ key)