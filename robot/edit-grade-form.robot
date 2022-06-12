*** Settings ***
Documentation     input form internship
Library           SeleniumLibrary

*** Variables ***
${SITE URL}		https://dev.kecdemo.itchaiyaphum.com/
${BROWSER}		Edge

*** Keywords ***
Open Website
	Open Browser    ${SITE URL}    ${BROWSER}

Select Value
	[Arguments]					${locator}		${values}
	Select From List By Value	${locator}		${values}

Select Label
	[Arguments]					${locator}		${labels}
	Select From List By Label	${locator}		${labels}

Radio
	[Arguments]				${group_name}		${value}
	Select Radio Button		${group_name}		${value}

In Text
	[Arguments]		${locator}		${text}
	Input Text		${locator}		${text}		False

In Number
	[Arguments]		${locator}		${number}
	Input Text		${locator}		${number}	False

In Date
	[Arguments]		${locator}		${date}
	# ${date} = "dd/mm/yyyy"
	Input Text		${locator}		${date}		False

*** Test Cases ***
Open 
    Open Website
    Click Link		xpath=/html/body/div/div/div/a[2]

Input ข้อมูลนักศึกษา
	Select Value	name:title			นาย
	In Text			name:firstname		นพรัตน์
	In Text			name:lastname		อินมี
	In Text			name:std_code		63209010002
	Select Label	name:class			ปวช
	Select Label	name:dep			เทคโนโลยีสารสนเทศ
	Select Label	name:year			1
	In Text			name:group			C1

Input แก้ไขผลการเรียน
	In Text			name:subject		ภาษาไทย
	Select Label	name:year0			2565
	Select Label	name:term			1
	In Text			name:subject_code	10002
	In Text			name:unit			3

Input ชื่อครูผู้สอน
	Select Value	name:title_te			นาย
	In Text			name:firstname_te		อลงกรณ์
	In Text			name:lastname_te		ภูคงคา 

Input ลายเซ็น นร
	Choose File		name:std_signature		${CURDIR}${/}assets${/}sign_1.png
# Test Close
# 	Close All Browsers


