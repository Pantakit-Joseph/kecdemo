*** Settings ***
Documentation     input form internship
Library           SeleniumLibrary

*** Variables ***
${SITE URL}		https://dev.kecdemo.itchaiyaphum.com/
${BROWSER}		Firefox

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
    Click Link		xpath=/html/body/div/div/div/a[1]

Input form 1
	Select Value	name:title			นาย
	In Text			name:firstname		พันธกิจ
	In Text			name:lastname		มะลิทอง
	In Text			name:std_code		65309010002
	Select Label	name:class			ปวส
	In Text			name:group			D1
	Select Label	name:dep			เทคโนโลยีสารสนเทศ
	Select Label	name:minor			นักพัฒนาซอฟต์แวร์คอมพิวเตอร์
	In Number		name:grade			3.91

Input form 2
	Select Value	name:year_form		1/2565
	Select Value	name:year_to		2/2565
	In Date			name:date_form		01/01/2022
	In Date			name:date_to		31/12/2022

Input form 3
	Radio			location			1
	In Text			name:name_lo		วิทยาลัยเทคนิคชัยภูมิ
	In Text			name:position		หัวหน้าแผนก
	In Text			name:number			240
	In Text			name:road			องค์การบริหารส่วนจังหวัดสาย 2 
	In Text			name:sub_district	ในเมือง
	In Text			name:district		เมือง
	In Text			name:provice		ชัยภูมิ
	In Text			name:code_p			36000
	In Text			name:tel			044812075
	Choose File		name:std_signature	${CURDIR}${/}assets${/}sign_1.png

# Test Close
# 	Close All Browsers

