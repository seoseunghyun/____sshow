#SSHOW API Documentation
This Document is SSHOW API Documentation.<br />
Copyright By [SSHOW Homepage](http://sshow.org)

=
=
=


##__SSHOW 개발 환경__
>
- php 5.0 이상의 아파치 서버 환경을 권장한다.
- 실제 개발은 Mac OS X 10.9.4 기반 Coda2 IDE를 이용하여 개발하였다.
- 아래의 모든 API는 뒤의 명시된 

=
=
=


##__SSHOW 기본 구조__
- SSHOW의 폴더 및 파일 기본 구조이다. <br />
- "+"는 폴더 "-"는 파일로 구분하였다.

-

	 + common
		 + src
		 	 - jquery.js
	 + config
		 + class
		 + lang
		 - init.php
	 + core
	
	 + data
		 + common
		 	 - init.php
	 + include
		 + api
		 + brain
	 	 + layout
	 	 + setup
	 	 + style
	 - index.php
	


=
=
=

##__SSHOW 개발용 상수 정의__
=
>
###상수 정의
######상수는 기본적으로 대문자로 표기하는 것이 일반적이므로 SSHOW에서도 다음과 같이 구성하였다. 
- &#95;SSHOW&#95;* : UnderBar - public 전역 상수 (확장 프로그램 개발자 용으로 제공되는 상수)
- &#95;&#95;SSHOW&#95;&#95;* : Double UnderBar - private 전역 상수 (Core 개발자 용으로 제공되는 상수)

=
##표준 상수
####&#95;SSHOW&#95;
	SSHOW가 Import 되었는지 판단하는 Flag Boolean 값
- __return__ : true

####&#95;SSHOW&#95;VERSION&#95;
	SSHOW의 현재 버전을 반환한다.
- __return__ : 현재 SSHOW의 버전

####&#95;SSHOW&#95;DIR&#95;
	php를 이용하여 include 하거나 확장 프로그램을 작성할 때 자주 사용한다.
- __return__ : 현재 SSHOW의 절대 경로

####&#95;SSHOW&#95;URL&#95;
	src 혹은 url을 통하여 javascript, css와 같은 파일을 삽입 할 때 자주 사용한다.
- __return__ : 현재 SSHOW의 URL 상대 경로


=
##jQuery 관련 상수
####&#95;SSHOW&#95;JQUERY&#95;
	jQuery가 Import 되었는지 판단하는 Flag Boolean 값
- __return__ : true

####&#95;SSHOW&#95;JQUERY&#95;VERSION&#95;
	Import된 jQuery의 현재 버전을 반환한다.
- __return__ : jQuery의 버전

####&#95;SSHOW&#95;JQUERY&#95;DIR&#95;
	php를 이용하여 include 하거나 확장 프로그램을 작성할 때 자주 사용한다.
- __return__ : _&#95;SSHOW&#95;DIR&#95;_.'common/src/jquery.js' : jQuery의 절대 경로

####&#95;SSHOW&#95;JQUERY&#95;URL&#95;
	src 혹은 url을 통하여 javascript, css와 같은 파일을 삽입 할 때 자주 사용한다.
- __return__ : _&#95;SSHOW&#95;URL&#95;_.'common/src/jquery.js' : jQuery의 URL 상대 경로
- __usage__ : jQuery를 CDN으로 사용 할 경우 커스터마이징을 할 수 있다.


=
=
=

##__SSHOW 개발용 변수 정의__
=
>
###변수 명명 법
######변수는 기본적으로 통합 관리를 위하여 $sshow_Class_->* 와 같은 형식으로 클래스화 하여 관리한다.
- $sshow_Class_ : sshow의 모든 전역 변수는 클래스를 생성하여 관리한다.
- 멤버 함수와 멤버 변수는 오버로딩이 되어 있다.

=
##기본 설정 변수 ( $sshowConfig )
###기본 설정 변수는 _&#95;SSHOW&#95;DIR&#95;_.'config/class/config.php' 에서 호출하며 <br />_&#95;SSHOW&#95;DIR&#95;_.'config/init.php' 에서 클래스를 통해 생성한다.
####$sshowConfig->lang
	SSHOW의 기본 언어가 설정 된 멤버 변수
- __Basic return__ : 'ko' or 'en'

####$sshowConfig->lang( _$&#95;lang_ )
	SSHOW의 기본 언어를 설정 할 멤버 함수
- __$&#95;lang__ : 설정 할 언어

####$sshowConfig->pngCompatibility
	
- __Basic return__ : 'ko' or 'en'