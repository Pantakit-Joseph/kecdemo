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


