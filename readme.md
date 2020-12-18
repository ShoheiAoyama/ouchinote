<p align="center"><img src="https://blog.autumnblue.net/wp-content/uploads/2020/12/house.jpeg" width="600"></p>

<p align="center">
<a href="https://img.shields.io/github/issues/ShoheiAoyama/ouchinote"><img src="https://img.shields.io/github/issues/ShoheiAoyama/ouchinote" alt="issues"></a>
<a href="https://img.shields.io/github/forks/ShoheiAoyama/ouchinote"><img src="https://img.shields.io/github/forks/ShoheiAoyama/ouchinote" alt="forks"></a>
<a href="https://img.shields.io/github/stars/ShoheiAoyama/ouchinote"><img src="https://img.shields.io/github/stars/ShoheiAoyama/ouchinote" alt="stars"></a>
<a href="https://img.shields.io/github/license/ShoheiAoyama/ouchinote"><img src="https://img.shields.io/github/license/ShoheiAoyama/ouchinote" alt="license"></a>
<a href="https://img.shields.io/twitter/url?url=https%3A%2F%2Fgithub.com%2FShoheiAoyama%2Fouchinote
"><img src="https://img.shields.io/twitter/url?url=https%3A%2F%2Fgithub.com%2FShoheiAoyama%2Fouchinote
" alt="twitter"></a>
</p>

## About OuchiNote

「OuchiNote」は注文住宅の住宅会社選びをもっと便利にするための、WEBお家づくりノートサービス。  

"Ouchi Note" is a web-based home-building notebook that makes it easier to select a custom-built housing company.

## Background

日本の家づくりは注文住宅をはじめ、住宅会社によってデザインや性能等の仕様や建築費用が大きく異なる。  
そのため、自分の理想とする家づくりが可能な住宅を探し、比較検討後選ぶことが難しい現状がある。  

In Japanese house building, specifications such as design and performance and construction costs differ greatly depending on the housing company, including custom-built houses.  
Therefore, it is difficult to find a house where you can build your own ideal house and select it after comparison.

## Task

この現状の課題は大きく分けて2つある。
- **評判の良い住宅会社と出会うことが難しいこと。**
- **気になる住宅会社の情報を収集した際、情報管理するのが難しいこと。**  

There are two main issues in this situation.
- **Difficult to meet a reputable housing company.**
- **When collecting information on a housing company that interests you, it is difficult to manage the information.**

## Reason

>評判の良い住宅会社と出会うことが難しい  
>
注文住宅の会社を探すツールとしては、大手広告媒体の[SUUMO雑誌]( https://suumo.jp/edit/series/ )や、WEBサービスの[SUUMOネット]( https://suumo.jp/chumon/ )、[HOME'S]( https://www.homes.co.jp/iezukuri/ )、
[Houzz]( https://www.houzz.jp/ )といったメディアが主に使われている。  
しかしこれらの媒体は、広告費用をかけたものから視認性の高い場所に掲載される仕組みになっているため、
実際の世間の評価よりも資金力のある住宅会社が良い家を作る会社として認知されてしまっている。  
「家づくりは３回行わなければ納得する家は作れない。」と世間で言われている原因として、
このような住宅会社選びで失敗していることもあげられると考える。  
世間の評価をベースにした住宅会社情報媒体が必要である。

>気になる住宅会社の情報を収集した際、情報管理するのが難しい  
>
住宅会社は自社の家づくりを知ってもらうために様々なイベントやセミナーを行っている。  
比較検討のためより多くの情報を集めるべく、様々なイベントに参加するが、
収集した情報がどの会社のものだったか管理するのは容易ではない。
実際、私が注文住宅会社で接客した際、収集した情報の管理が難しく、
選ぶのが困難になるという声をヒアリングした。
「家づくりノート」と呼ばれる、家づくりに関わる必要な情報を書き込めるノートブックを配っている住宅会社もあるが、
他の資料と混ざってしまい、ノート自体の管理が難しいと言うデメリットがある。
また、住宅会社の配布する「家づくりノート」は自社の得意な部分を重点的に記入できる様になっているため、
公平性に欠ける。

>Difficult to meet a reputable housing company.  
>

Tools for finding a custom-built housing company include [SUUMO Magazine](https://suumo.jp/edit/series/), a major advertising medium, and [SUUMO Net](https://suumo.jp/), a web service. chumon /), [HOME'S](https://www.homes.co.jp/iezukuri/),
Media such as [Houzz](https://www.houzz.jp) are mainly used.  
However, since these media are designed to be posted in places with high visibility from those that cost advertising,
A housing company that has more financial power than the actual public evaluation has been recognized as a company that makes a good house.  
One of the reasons why people say, "If you don't build a house three times, you can't build a convincing house."
I think that it is possible that such a housing company selection has failed.
A housing company information medium based on public evaluation is needed.

>When collecting information on a housing company that interests you, it is difficult to manage the information.  
>
Housing companies hold various events and seminars to let them know how to build their own homes.  

Participate in various events to gather more information for comparison,
It is not easy to manage which company the information collected belongs to.  
In fact, when I served a customer at a custom-built housing company, it was difficult to manage the information I collected,
We heard that it would be difficult to choose.  
Some housing companies distribute notebooks called "house-building notebooks" that allow you to write necessary information related to home-building.
It has the disadvantage that it is difficult to manage the notebook itself because it is mixed with other materials.  
In addition, the "house-building notebook" distributed by the housing company allows you to focus on what you are good at.
Lack of fairness.

## Required functions

### Supervision function

- ユーザーログインはユーザー任意に決めたIDとパスワードで行う  
--- ログインするにはユーザー登録が必要  
--- ログイン後はログアウトすることができる  
- ユーザーはログイン後住宅会社情報を管理できる  
--- 登録した住宅会社情報は内容変更できる  
--- 登録した住宅会社情報は削除できる  
--- 登録した住宅会社情報は一覧表示させる  
--- 一覧表示は資金計画額順に並べ替えることが出来る  
- 住宅会社ログインは住宅会社任意に決めたIDとパスワードで行う  
--- ログインするには住宅会社登録が必要  
--- ログイン後はログアウトすることができる  
- ユーザーはログイン後理由と共に決定した住宅会社に「オススメ」をつけることができる  
--- 「オススメ」は1アカウントにつき1つまでしか登録できない  
--- 「オススメ」は登録後に変更することができる  
--- 「オススメ」は登録後に削除することができる  
--- もし会社登録がなければ、登録申請ができる　　

- Login with an ID and password decided by the user  
--- User registration required to log in  
--- You can log out after logging in  
- Users can manage housing company information after logging in  
--- The registered housing company information can be changed  
--- Registered housing company information can be deleted  
--- Display a list of registered housing company information 
--- The list display can be sorted in order of financial plan amount  
- Login with an ID and password decided by the housing company　 
--- Housing company registration required to log in  
--- You can log out after logging in  
- After logging in, the user can add "recommendations" to the housing company that was decided along with the reason.  
--- Only one "Recommended" can be registered per account  
--- "Recommended" can be changed after registration
--- "Recommended" can be deleted after registration  
--- If you do not have a company registration, you can apply for registration  


### Search function

- ユーザーはログインしなくてもオススメされた住宅会社を閲覧することができる   
- ユーザーはログインしなくても気になるワードで検索することができる
- ユーザーはログイン後住宅会社を「お気に入り登録」できる  
--- 「お気に入り登録」は一覧表示できる  
--- 「お気に入り登録」は削除できる  

- Users can browse recommended housing companies without logging in  
- Users can search for words they care about without logging in  
- Users can "favorite" housing companies after logging in  
--- "Favorite registration" can be displayed in a list 
--- "Favorite registration" can be deleted  

## My development environment

[Linux](https://brew.sh/index_ja).

## Framework

[Laravel](https://packagist.org/packages/laravel/framework). 

