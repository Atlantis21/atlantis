@extends('vpolis.layouts.vpolis-master')

@section('body')

<!-- Jobs page -->
<section class="pt-5">
  <div class="container shadow section-sm rounded">
    <div class="px-lg-5 px-4">
      <h2 class="row h-100 justify-content-center align-items-center mb-4 font-weight-medium">Лучшие вакансии от наших парнеров.</h2> <!-- main content -->
      <div class="content">
        <p><img src="{{ asset('vpolis/images/getting-started.jpg') }}" class="rounded mx-auto d-block" width="500px" alt="image"></p>
      </div>   
    </div>
   <div class="row row-cols-1 row-cols-md-2 g-4">
    <div class="col col-md-6 mb-4">
      <div class="card">
        <img src="{{ asset('vpolis/images/jobs/tomoru.png') }}" alt="TOMORU"/>
        <div class="card-body p-4">
          <button type="button" class="btn btn-primary rounded mx-auto d-block" data-toggle="modal" data-target="#exampleModal">
            <div class="col-md-16">
              <h6 class="row justify-content-center align-items-center mb-0 font-weight-medium text-uppercase "><strong>Менеджер отдела продаж удаленно</strong></h6> 
          </div>
          </button>
          
          <!-- Модальное окно -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">О вакансии</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="mt-4">
                    <h5 class="mb-3">Требования</h5>
                    <div class="job-detail-desc mt-2">
                        <ul class="list-unstyled mb-3 text-muted">
                            <li><i class="uil uil-circle"></i> Пол не имеет значение</li>
                            <li><i class="uil uil-circle"></i> Возраст от 18 до 35 лет (так как линейная позиция)</li> 
                            <li><i class="uil uil-circle"></i> Опыт в продажах/сопровождении клиентов/аккаунтинге/и иные сферы, где есть коммуникация – от 6 месяцев</li> 
                            <li><i class="uil uil-circle"></i> Гражданство РФ</li> 
                        </ul>
                    </div>
                </div>
                
                <div class="mt-4">
                    <h5 class="mb-3">Преимущества</h5>
                    <div class="job-detail-desc mt-2">
                        <ul class="job-detail-list list-unstyled mb-0 text-muted">
                            <li><i class="uil uil-circle"></i> Ежемесячный доход от 70 000 до 150 000 руб. (оклад + бонусы от продаж).</li> 
                            <li><i class="uil uil-circle"></i> Удаленный формат работы – вы можете работать из любой точки мира.</li> 
                            <li><i class="uil uil-circle"></i> График работы 5/2 с 9:00 до 18:00 МСК времени.</li> 
                            <li><i class="uil uil-circle"></i> Возможность вырасти до руководителя группы (ЗП от 110 000 до 250 000 руб.).</li>
                            <li><i class="uil uil-circle"></i> Регулярное обучение от первых лиц компании и основателей, эдвайзеров.</li> 
                            <li><i class="uil uil-circle"></i> Корпоративные мероприятия, мерч и систему бонусов за результат.</li> 
                            <li><i class="uil uil-circle"></i> Оформление кандидата как самозанятого</li> 
                        
                        </ul>
                    </div>
                </div>
      
                <div class="mt-4">
                    <h5 class="mb-3">Задачи</h5>
                    <div class="job-details-desc">
                        <ul class="job-detail-list list-unstyled mb-0 text-muted">
                            <li><i class="uil uil-circle"></i> Обрабатывать входящие заявки – квалифицировать лиды и назначать встречи.</li>
                            <li><i class="uil uil-circle"></i> Проводить Zoom-встречи – презентовать Tomoru и заключать сделки.</li> 
                            <li><i class="uil uil-circle"></i> Внимательно вести свои сделки в AmoCRM-системе.</li> 
                            
                        </ul>
                    </div>
                </div>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-primary rounded mx-auto d-block disabled" href="#" role="button" aria-disabled="true">Откликнуться</a>
                </div>
              </div>
            </div>
          </div>
        
      </div>
      </div>
    </div>
    <div class="col col-md-6 mb-4">
      <div class="card">
        <img src="{{ asset('vpolis/images/jobs/leadideal.png') }}" alt="LEADIDEAL"/>
        <div class="card-body p-4">
                   <!-- Кнопка-триггер модального окна -->
<button type="button" class="btn btn-primary rounded mx-auto d-block" data-toggle="modal" data-target="#exampleModal1">
  <div class="col-md-16">
    <h6 class="row justify-content-center align-items-center mb-0 font-weight-medium text-uppercase "><strong>Оператор Колл-центра</strong></h6> 
</div>
</button>

<!-- Модальное окно -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel1">О вакансии</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="mt-4">
          <h5 class="mb-3">Требования</h5>
          <div class="job-detail-desc mt-2">
              <ul class="job-detail-list list-unstyled mb-0 text-muted">
                  <li><i class="uil uil-circle"></i> Возраст от 18-50 лет</li>
                  <li><i class="uil uil-circle"></i> Наличие  ПК, гарнитуры, стабильного интернета</li> 
                  <li><i class="uil uil-circle"></i> Свободное владение русским языком</li> 
                </ul>
          </div>
      </div>
      
      <div class="mt-4">
          <h5 class="mb-3">Преимущества</h5>
          <div class="job-detail-desc mt-2">
              <ul class="job-detail-list list-unstyled mb-0 text-muted">
                  <li><i class="uil uil-circle"></i> Дистанционная работа (время по МСК)</li> 
                  <li><i class="uil uil-circle"></i> Гибкий график (без ночных смен)</li> 
                  <li><i class="uil uil-circle"></i> Оплачиваемое обучение</li> 
              </ul>
          </div>
      </div>

      <div class="mt-4">
          <h5 class="mb-3">Задачи</h5>
          <div class="job-details-desc">
              <ul class="job-detail-list list-unstyled mb-0 text-muted">
                  <li><i class="uil uil-circle"></i> Требуется звонить по готовой базе клиентов и предлагать бесплатную помощь в подборе недвижимости или авто</li>                      
              </ul>
          </div>
      </div>
      </div>
      <div class="modal-footer">
        <a class="btn btn-primary rounded mx-auto d-block" href="https://trk.ppdu.ru/click?uid=111807&pid=1&oid=047a5374-a816-4890-a032-1033707f3554&erid=Kra23uVC3&sub1=leadideal" role="button">Откликнуться</a>
    </div>
    </div>
  </div>
</div>
          
          <div>   
          </div>

      </div>
      </div>
    </div>
    <div class="col col-md-6 mb-4">
      <div class="card">
         <img src="{{ asset('vpolis/images/jobs/rostelekom.png') }}" alt="ROSTELEKOM"/>
         <div class="card-body p-4">
         <!-- Кнопка-триггер модального окна -->
<button type="button" class="btn btn-primary rounded mx-auto d-block" data-toggle="modal" data-target="#exampleModal2">
  <div class="col-md-16">
    <h6 class="row justify-content-center align-items-center mb-0 font-weight-medium text-uppercase "><strong>Установщик интернет оборудования на личном авто</strong></h6> 
</div>
</button>

<!-- Модальное окно -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel2">О вакансии</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="mt-4">
          <h5 class="mb-3">Требования</h5>
          <div class="job-detail-desc mt-2">
              <ul class="job-detail-list list-unstyled mb-0 text-muted">
                  <li><i class="uil uil-circle"></i> Возраст: от 18 до 45 лет</li>
                  <li><i class="uil uil-circle"></i> Гражданство РФ</li> 
                  <li><i class="uil uil-circle"></i> Готовность выйти в ближайшее время</li> 
                  <li><i class="uil uil-circle"></i> Личное АВТО</li>
                </ul>
          </div>
      </div>
        <div class="mt-4">
          <h5 class="mb-3">Преимущества</h5>
          <div class="job-detail-desc mt-2">
              <ul class="job-detail-list list-unstyled mb-0 text-muted">
                  <li><i class="uil uil-circle"></i> Первые 2 месяца работы двойной оклад! Поддерживают новичков!</li> 
                  <li><i class="uil uil-circle"></i> Ежемесячные премии по результатам работы. Повышенная стоимость балла</li> 
                  <li><i class="uil uil-circle"></i> Оплата транспортных расходов, компенсация за использование автомобиля</li>
                  <li><i class="uil uil-circle"></i> Удобный график работы 2/2, 5/2</li> 
                  <li><i class="uil uil-circle"></i> Оформление в штат с первого рабочего дня, расширенный соцпакет после испытательного срока: телемедицина, компенсация процентов по ипотечному кредиту</li> 
                  <li><i class="uil uil-circle"></i> Всестороннее развитие: корпоративный онлайн-университет, доступ к электронным библиотекам с широким выбором бизнес-литературы, компенсация профильного внешнего обучения</li>
                  <li><i class="uil uil-circle"></i> Доход без ограничений. Финансовая стабильность и возможность получать повышенное вознаграждение за дополнительные часы работы или активную продажу продуктов</li> 
                  <li><i class="uil uil-circle"></i> Компенсация сотовой связи и специальные условия на услуги компании для сотрудников, корпоративные скидки у компаний-партнеров</li>  
              </ul>
          </div>
      </div>

      <div class="mt-4">
          <h5 class="mb-3">Задачи</h5>
          <div class="job-details-desc">
              <ul class="job-detail-list list-unstyled mb-0 text-muted">
                  <li><i class="uil uil-circle"></i> Подключение новых абонентов (физических лиц) к услугам компании: интернет, интерактивное ТВ, видеонаблюдение, умный дом</li>
                  <li><i class="uil uil-circle"></i> Настройка оборудования и первичная проверка работоспособности</li>
                  <li><i class="uil uil-circle"></i> Консультирование клиентов по работе оборудования и техническим вопросам</li>
                  <li><i class="uil uil-circle"></i> Ведение отчетности в мобильном приложении</li>                      
              </ul>
          </div>
      </div>
      </div>
      <div class="modal-footer">
        <a class="btn btn-primary rounded mx-auto d-block" href="https://trk.ppdu.ru/click?uid=111807&pid=1&oid=bcb08a6f-d95b-4e05-b154-4c749c610541&erid=Kra241sVZ&sub1=rostelekom" role="button">Откликнуться</a>
    </div>
    </div>
  </div>
</div>

          

      </div>
      </div>
    </div>
    <div class="col col-md-6 mb-4">
      <div class="card">
        <img src="{{ asset('vpolis/images/jobs/yandex.png') }}" alt="YANDEX CALL"/>
        <div class="card-body p-4">
          <!-- Кнопка-триггер модального окна -->
<button type="button" class="btn btn-primary rounded mx-auto d-block" data-toggle="modal" data-target="#exampleModal3">
  <div class="col-md-16">
    <h6 class="row justify-content-center align-items-center mb-0 font-weight-medium text-uppercase "><strong>Менеджер по продажам удаленно</strong></h6> 
</div>
</button>

<!-- Модальное окно -->
<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel3" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel3">О вакансии</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="mt-4">
          <h5 class="mb-3">Требования</h5>
          <div class="job-detail-desc mt-2">
              <ul class="job-detail-list list-unstyled mb-0 text-muted">
                  <li><i class="uil uil-circle"></i> Возраст от 20 до 35 лет</li>
                  <li><i class="uil uil-circle"></i> Пол: любой</li>
                  <li><i class="uil uil-circle"></i> Гражданство РФ</li>
                  <li><i class="uil uil-circle"></i> Опыт работы в продажах от 6 месяцев</li>
                  <li><i class="uil uil-circle"></i> Наличие компьютера и интернета</li> 
                </ul>
          </div>
      </div>
      
      <div class="mt-4">
          <h5 class="mb-3">Преимущества</h5>
          <div class="job-detail-desc mt-2">
              <ul class="job-detail-list list-unstyled mb-0 text-muted">
                  <li><i class="uil uil-circle"></i> Работа на дому</li> 
                  <li><i class="uil uil-circle"></i> Возможность самостоятельно влиять на доход</li> 
                  <li><i class="uil uil-circle"></i> Карьерный рост и развитие</li> 
              </ul>
          </div>
      </div>

      <div class="mt-4">
          <h5 class="mb-3">Задачи</h5>
          <div class="job-details-desc">
              <ul class="job-detail-list list-unstyled mb-0 text-muted">
                  <li><i class="uil uil-circle"></i> Консультирование клиентов</li>                      
              </ul>
          </div>
      </div>
      </div>
      <div class="modal-footer">
        <a class="btn btn-primary rounded mx-auto d-block disabled" href="https://trk.ppdu.ru/click?uid=111807&pid=1&oid=48c4d604-b3a3-4246-a220-f5aff6d046b9&erid=Kra247aby&sub1=yandexcall" role="button" aria-disabled="true">Откликнуться</a>
    </div>
    </div>
  </div>
</div>
          

      </div>
      </div>
    </div>
    <div class="col col-md-6 mb-4">
      <div class="card">
        <img src="{{ asset('vpolis/images/jobs/rostelekom1.png') }}" alt="ROSTELEKOM CALL"/>
        <div class="card-body p-4">
          <!-- Кнопка-триггер модального окна -->
<button type="button" class="btn btn-primary rounded mx-auto d-block" data-toggle="modal" data-target="#exampleModal4">
  <div class="col-md-16">
    <h6 class="row justify-content-center align-items-center mb-0 font-weight-medium text-uppercase "><strong>Оператор Колл-Центра</strong></h6> 
</div>
</button>

<!-- Модальное окно -->
<div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel4" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel4">О вакансии</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="mt-4">
          <h5 class="mb-3">Требования</h5>
          <div class="job-detail-desc mt-2">
              <ul class="job-detail-list list-unstyled mb-0 text-muted">
                  <li><i class="uil uil-circle"></i> Возраст: от 18 до 45 лет</li>
                  <li><i class="uil uil-circle"></i> Пол: любой</li>
                  <li><i class="uil uil-circle"></i> Гражданство РФ</li>
                  <li><i class="uil uil-circle"></i> Готовность выйти в ближайшее время</li> 
                </ul>
          </div>
      </div>
      
      <div class="mt-4">
          <h5 class="mb-3">Преимущества</h5>
          <div class="job-detail-desc mt-2">
              <ul class="job-detail-list list-unstyled mb-0 text-muted">
                  <li><i class="uil uil-circle"></i> Фиксированный доход + бонусная часть по результатам работы</li> 
                  <li><i class="uil uil-circle"></i> Официальное оформление по договору гражданско-правового характера, полностью белая оплата (отчисления в налоговую и пенсионный фонд)</li> 
                  <li><i class="uil uil-circle"></i> Возможность выбрать удобный график работы от 4 часов в день, (на время обучения график работы 5/2 с 9.00 до 18.00)</li>
                  <li><i class="uil uil-circle"></i> Оплачиваемое двухнедельное обучение</li> 
                  <li><i class="uil uil-circle"></i> Система наставничества на весь период адаптации в компании и дальнейшего сотрудничества</li> 
                  <li><i class="uil uil-circle"></i> Всестороннее развитие: корпоративный онлайн-университет, доступ к электронным библиотекам с широким выбором бизнес-литературы</li>
                  <li><i class="uil uil-circle"></i> Возможность перевода на удаленный формат работы по истечению испытательного срока</li> 
              </ul>
          </div>
      </div>

      <div class="mt-4">
          <h5 class="mb-3">Задачи</h5>
          <div class="job-details-desc">
              <ul class="job-detail-list list-unstyled mb-0 text-muted">
                  <li><i class="uil uil-circle"></i> Входящие звонки с целью удержания и сохранения лояльности клиента</li>
                  <li><i class="uil uil-circle"></i> Консультирование клиентов по тарифам и услугам (смена тарифного плана, акции, скидки на действующий тариф, составление заявки на перенос договора с одного адреса на другой)</li>
                  <li><i class="uil uil-circle"></i> Помощь в решении вопросов клиентов, путем подбора индивидуальных предложений</li>                      
              </ul>
          </div>
      </div>
      </div>
      <div class="modal-footer">
        <a class="btn btn-primary rounded mx-auto d-block" href="https://trk.ppdu.ru/click?uid=111807&pid=1&oid=c195996e-46e6-42b7-9cc4-8978168ce64a&erid=Kra241sVZ&sub1=rostelekomcall" role="button">Откликнуться</a>
    </div>
    </div>
  </div>
</div>
          
      </div>
      </div> 
    </div>
    <div class="col col-md-6 mb-4">
      <div class="card">
         <img src="{{ asset('vpolis/images/jobs/tinkoff.png') }}" alt="TINKOFF"/>
         <div class="card-body p-4">
         <!-- Кнопка-триггер модального окна -->
<button type="button" class="btn btn-primary rounded mx-auto d-block" data-toggle="modal" data-target="#exampleModal5">
  <div class="col-md-16">
    <h6 class="row justify-content-center align-items-center mb-0 font-weight-medium text-uppercase "><strong>Работа в Тинькофф</strong></h6> 
</div>
</button>

<!-- Модальное окно -->
<div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel5" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel5">О вакансии</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <div class="mt-4">
              <h5 class="mb-3">Требования</h5>
              <div class="job-detail-desc mt-2">
                  <ul class="job-detail-list list-unstyled mb-0 text-muted">
                      <li><i class="uil uil-circle"></i> Возраст: от 18 лет</li>
                      <li><i class="uil uil-circle"></i> Пол: любой</li> 
                      <li><i class="uil uil-circle"></i> Гражданство РФ</li> 
                    </ul>
              </div>
          </div>
          
          <div class="mt-4">
              <h5 class="mb-3">Преимущества</h5>
              <div class="job-detail-desc mt-2">
                  <ul class="job-detail-list list-unstyled mb-0 text-muted">
                      <li><i class="uil uil-circle"></i> Доход без ограничений. Финансовая стабильность и возможность получать повышенное вознаграждение за дополнительные часы работы или активную продажу продуктов</li> 
                      <li><i class="uil uil-circle"></i> Удобный график работы 5/2, 2/2 или по гибкому графику с почасовой оплатой — удаленно или в офисе</li> 
                      <li><i class="uil uil-circle"></i> Можно без опыта</li> 
                  </ul>
              </div>
          </div>

          <div class="mt-4">
              <h5 class="mb-3">Задачи</h5>
              <div class="job-details-desc">
                  <ul class="job-detail-list list-unstyled mb-0 text-muted">
                      <li><i class="uil uil-circle"></i> Консультирование клиентов компании</li>                      
                  </ul>
              </div>
          </div>
      </div>
      <div class="modal-footer">
        <a class="btn btn-primary rounded mx-auto d-block" href="https://trk.ppdu.ru/click?uid=111807&pid=1&oid=2230a536-7128-4e7a-9bb4-ec25a192abc8&erid=Kra23zXR1&sub1=tinkoff" role="button">Откликнуться</a>
    </div>
    </div>
  </div>
</div>

          

      </div>
      </div>
    </div>
    <div class="col col-md-6 mb-4">
      <div class="card">
        <img src="{{ asset('vpolis/images/jobs/ozon.png') }}" alt="OZON"/>
        <div class="card-body p-4">
         <!-- Кнопка-триггер модального окна -->
<button type="button" class="btn btn-primary rounded mx-auto d-block" data-toggle="modal" data-target="#exampleModal6">
 <div class="col-md-16">
   <h6 class="row justify-content-center align-items-center mb-0 font-weight-medium text-uppercase "><strong>OZON Кладовщик</strong></h6> 
</div>
</button>

<!-- Модальное окно -->
<div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel6" aria-hidden="true">
 <div class="modal-dialog">
   <div class="modal-content">
     <div class="modal-header">
       <h5 class="modal-title" id="exampleModalLabel6">О вакансии</h5>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
     </div>
     <div class="modal-body">
       <div class="mt-4">
         <h5 class="mb-3">Требования</h5>
         <div class="job-detail-desc mt-2">
             <ul class="job-detail-list list-unstyled mb-0 text-muted">
                 <li><i class="uil uil-circle"></i> Наличие паспорта</li>
                 <li><i class="uil uil-circle"></i> Аккуратность, ответственность, вежливость, исполнительность, пунктуальность</li> 
               </ul>
         </div>
     </div>
     
     <div class="mt-4">
         <h5 class="mb-3">Преимущества</h5>
         <div class="job-detail-desc mt-2">
             <ul class="job-detail-list list-unstyled mb-0 text-muted">
                 <li><i class="uil uil-circle"></i> Гибкий график работы, который подбирается индивидуально</li> 
                 <li><i class="uil uil-circle"></i> Предоставляют фирменную одежду</li> 
                 <li><i class="uil uil-circle"></i> Можно без опыта</li> 
             </ul>
         </div>
     </div>

     <div class="mt-4">
         <h5 class="mb-3">Задачи</h5>
         <div class="job-details-desc">
             <ul class="job-detail-list list-unstyled mb-0 text-muted">
                 <li><i class="uil uil-circle"></i> Упаковка, сортировка заказов</li>                      
             </ul>
         </div>
     </div>
     </div>
     <div class="modal-footer">
      <a class="btn btn-primary rounded mx-auto d-block" href="https://trk.ppdu.ru/click?uid=111807&pid=1&oid=3d232264-f0e8-4993-aeae-bcc2afcfb94c&erid=Kra23omvo&sub1=storekeeper" role="button">Откликнуться</a>
  </div>
   </div>
 </div>
</div>
         

        

         

     </div>
     </div>
    </div>
    <div class="col col-md-6 mb-4">
      <div class="card">
        <img src="{{ asset('vpolis/images/jobs/ozon.png') }}" alt="OZON"/>
        <div class="card-body p-4">
          <!-- Кнопка-триггер модального окна -->
<button type="button" class="btn btn-primary rounded mx-auto d-block" data-toggle="modal" data-target="#exampleModal7">
  <div class="col-md-16">
    <h6 class="row justify-content-center align-items-center mb-0 font-weight-medium text-uppercase "><strong>Курьер OZON</strong></h6> 
</div>
</button>

<!-- Модальное окно -->
<div class="modal fade" id="exampleModal7" tabindex="-1" aria-labelledby="exampleModalLabel7" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel7">О вакансии</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="mt-4">
          <h5 class="mb-3">Требования</h5>
          <div class="job-detail-desc mt-2">
              <ul class="job-detail-list list-unstyled mb-0 text-muted">
                  <li><i class="uil uil-circle"></i> Действующие водительские права категории В</li>
                  <li><i class="uil uil-circle"></i> Аккуратность, ответственность, вежливость, исполнительность, пунктуальность</li> 
              </ul>
          </div>
      </div>
      
      <div class="mt-4">
          <h5 class="mb-3">Преимущества</h5>
          <div class="job-detail-desc mt-2">
              <ul class="job-detail-list list-unstyled mb-0 text-muted">
                  <li><i class="uil uil-circle"></i> Гибкий график работы, который подбирается индивидуально</li> 
                  <li><i class="uil uil-circle"></i> Стабильные выплаты заработной платы и уверенность в завтрашнем дне</li> 
                  <li><i class="uil uil-circle"></i> Территорию осуществления доставки обговаривается индивидуально</li> 
                  <li><i class="uil uil-circle"></i> Прикрепление к конкретному округу</li>
                  <li><i class="uil uil-circle"></i> Предоставляют фирменную одежду</li> 
              </ul>
          </div>
      </div>

      <div class="mt-4">
          <h5 class="mb-3">Задачи</h5>
          <div class="job-details-desc">
              <ul class="job-detail-list list-unstyled mb-0 text-muted">
                  <li><i class="uil uil-circle"></i> Доставка поссылок клиентам лично и в ПВЗ</li>   
              </ul>
          </div>
      </div>
      </div>
      <div class="modal-footer">
        <a class="btn btn-primary rounded mx-auto d-block" href="https://trk.ppdu.ru/click?uid=111807&pid=1&oid=c089a32e-fd50-45a8-a650-dba09753e928&erid=Kra23omvo&sub1=courier" role="button">Откликнуться</a>
    </div>
    </div>
  </div>
</div>
          
      </div>
      </div>
    </div>
    <div class="col col-md-6 mb-4">
      <div class="card">
        <img src="{{ asset('vpolis/images/jobs/yandexmeal.png') }}" alt="YANDEX MEAL"/>
        <div class="card-body p-4">
          <!-- Кнопка-триггер модального окна -->
<button type="button" class="btn btn-primary rounded mx-auto d-block" data-toggle="modal" data-target="#exampleModal8">
  <div class="col-md-16">
    <h6 class="row justify-content-center align-items-center mb-0 font-weight-medium text-uppercase "><strong>Курьер в Яндекс Еда</strong></h6> 
</div>
</button>

<!-- Модальное окно -->
<div class="modal fade" id="exampleModal8" tabindex="-1" aria-labelledby="exampleModalLabel8" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel8">О вакансии</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="mt-4">
          <h5 class="mb-3">Требования</h5>
          <div class="job-detail-desc mt-2">
              <ul class="job-detail-list list-unstyled mb-0 text-muted">
                  <li><i class="uil uil-circle"></i> Возраст от 18 лет</li>
                  <li><i class="uil uil-circle"></i> Телефон на базе Android 7.0 и выше</li>
                  <li><i class="uil uil-circle"></i> Велокурьеры приветствуются - партнер предоставляет скидки на велосипед до 20%</li> 
                  <li><i class="uil uil-circle"></i> Мед. книжка (за счет кандидата)</li>
                  <li><i class="uil uil-circle"></i> Удостоверение личности</li>
                  <li><i class="uil uil-circle"></i> Можно без опыта работы</li> 
                </ul>
          </div>
      </div>
      
      <div class="mt-4">
          <h5 class="mb-3">Преимущества</h5>
          <div class="job-detail-desc mt-2">
              <ul class="job-detail-list list-unstyled mb-0 text-muted">
                  <li><i class="uil uil-circle"></i> Комфортное расписание и график работы</li> 
                  <li><i class="uil uil-circle"></i> Гарантии и бонусы</li> 
                  <li><i class="uil uil-circle"></i> Большое количество поступающих заказов (заказы поступают 24/7 круглосуточно)</li> 
                  <li><i class="uil uil-circle"></i> Заработная плата до 6000 рублей в день</li>
              </ul>
          </div>
      </div>

      <div class="mt-4">
          <h5 class="mb-3">Задачи</h5>
          <div class="job-details-desc">
              <ul class="job-detail-list list-unstyled mb-0 text-muted">
                  <li><i class="uil uil-circle"></i> Доставка продукции ресторанов и магазинов</li>                      
              </ul>
          </div>
      </div>
      </div>
      <div class="modal-footer">
        <a class="btn btn-primary rounded mx-auto d-block" href="https://trk.ppdu.ru/click?uid=111807&pid=1&oid=31ba9c13-4847-41f9-bc4a-1f4a1fbced43&erid=Kra23uVC3&sub1=yandexmeal" role="button">Откликнуться</a>
    </div>
    </div>
  </div>
</div>
          

      </div>
      </div>
    </div>
    <div class="col col-md-6 mb-4">
      <div class="card">
        <img src="{{ asset('vpolis/images/jobs/yandextaxi.png') }}" alt="YANDEX TAXI"/>
        <div class="card-body p-4">
          <!-- Кнопка-триггер модального окна -->
<button type="button" class="btn btn-primary rounded mx-auto d-block" data-toggle="modal" data-target="#exampleModal9">
  <div class="col-md-16">
    <h6 class="row justify-content-center align-items-center mb-0 font-weight-medium text-uppercase "><strong>Водитель в Женcкое Яндекс.Такси</strong></h6> 
</div>
</button>

<!-- Модальное окно -->
<div class="modal fade" id="exampleModal9" tabindex="-1" aria-labelledby="exampleModalLabel9" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel9">О вакансии</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="mt-4">
          <h5 class="mb-3">Требования</h5>
          <div class="job-detail-desc mt-2">
              <ul class="job-detail-list list-unstyled mb-0 text-muted">
                  <li><i class="uil uil-circle"></i> Возраст: 21+</li>
                  <li><i class="uil uil-circle"></i> Наличие ВУ категории В</li> 
                  <li><i class="uil uil-circle"></i> Наличие авто</li>
                  <li><i class="uil uil-circle"></i> Аккуратный, плавный стиль вождения</li>
                  <li><i class="uil uil-circle"></i> Знание города или умение пользоваться навигатором</li> 
                </ul>
          </div>
      </div>
      
      <div class="mt-4">
          <h5 class="mb-3">Преимущества</h5>
          <div class="job-detail-desc mt-2">
              <ul class="job-detail-list list-unstyled mb-0 text-muted">
                  <li><i class="uil uil-circle"></i> Комфортное расписание и график работы</li> 
                  <li><i class="uil uil-circle"></i> Гарантии и бонусы</li> 
                  <li><i class="uil uil-circle"></i> Большое количество поступающих заказов (заказы поступают 24/7 круглосуточно)</li> 
                  <li><i class="uil uil-circle"></i> Заказы поступают водителю через приложение Яндекс</li>
                  <li><i class="uil uil-circle"></i> Круглосуточная поддержка водителей службой поддержки Яндекс</li> 
              </ul>
          </div>
      </div>

      <div class="mt-4">
          <h5 class="mb-3">Задачи</h5>
          <div class="job-details-desc">
              <ul class="job-detail-list list-unstyled mb-0 text-muted">
                  <li><i class="uil uil-circle"></i> Развоз клиентов от точки А до точки Б</li>                      
              </ul>
          </div>
      </div>
      </div>
      <div class="modal-footer">
        <a class="btn btn-primary rounded mx-auto d-block" href="https://trk.ppdu.ru/click?uid=111807&pid=1&oid=00bc1818-367e-493e-a32a-63beafda4af9&erid=Kra23yBVH&sub1=yandextaxi" role="button">Откликнуться</a>
    </div>
    </div>
  </div>
</div>

      </div>
      </div>
    </div>
  </div>
  <div class="row row-cols-1 row-cols-md-2 g-4">
    <div class="col">
      <div class="card">
         <img src="{{ asset('vpolis/images/jobs/burgerking.png') }}" alt="BURGER KING"/>
         <div class="card-body p-4">
         <!-- Кнопка-триггер модального окна -->
<button type="button" class="btn btn-primary rounded mx-auto d-block" data-toggle="modal" data-target="#exampleModal10">
  <div class="col-md-16">
    <h6 class="row justify-content-center align-items-center mb-0 font-weight-medium text-uppercase "><strong>Курьер в Burger King</strong></h6> 
</div>
</button>

<!-- Модальное окно -->
<div class="modal fade" id="exampleModal10" tabindex="-1" aria-labelledby="exampleModalLabel10" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel10">О вакансии</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="mt-4">
          <h5 class="mb-3">Требования</h5>
          <div class="job-detail-desc mt-2">
              <ul class="job-detail-list list-unstyled mb-0 text-muted">
                  <li><i class="uil uil-circle"></i> Возраст от 18 лет</li>
                  <li><i class="uil uil-circle"></i> Водительские права категории B (для авто), M, A  и А1 (для мото)</li> 
                  <li><i class="uil uil-circle"></i> Свободное владение русским языком</li> 
                  <li><i class="uil uil-circle"></i> Можно без опыта работы</li> 
                  <li><i class="uil uil-circle"></i> Умение работать со смартфоном</li>
                  <li><i class="uil uil-circle"></i> Умение пользоваться навигатором</li>
                  <li><i class="uil uil-circle"></i> Мед.книжка (если нет, то работодатель сделает)</li> 
              </ul>
          </div>
      </div>
      
      <div class="mt-4">
          <h5 class="mb-3">Преимущества</h5>
          <div class="job-detail-desc mt-2">
              <ul class="job-detail-list list-unstyled mb-0 text-muted">
                  <li><i class="uil uil-circle"></i> Еженедельные выплаты</li> 
                  <li><i class="uil uil-circle"></i> Безналичные чаевые</li> 
                  <li><i class="uil uil-circle"></i> Легкий способ оформить самозанятость. Все процессы по отчетности (чекам), оплате налогов на себя берет компания-партнер. Налоги при самозанятости оплачивает компания- сумма дохода указана чистыми.</li> 
                  <li><i class="uil uil-circle"></i> Бесплатное питание</li>
                  <li><i class="uil uil-circle"></i> Удобная форма и термо-сумки для заказов</li> 
                  <li><i class="uil uil-circle"></i> Нет штрафов</li> 
                  <li><i class="uil uil-circle"></i> Компенсация транспорта не только авто-курьерам, но и вело, и мото</li> 
                  <li><i class="uil uil-circle"></i> Сменный график работы на выбор: 5/2, 6/1, 2/2 + ночное время до 3:00</li>
                  <li><i class="uil uil-circle"></i> Возможность совмещать с другой работой или учебой</li>
              </ul>
          </div>
      </div>

      <div class="mt-4">
          <h5 class="mb-3">Задачи</h5>
          <div class="job-details-desc">
              <ul class="job-detail-list list-unstyled mb-0 text-muted">
                  <li><i class="uil uil-circle"></i> Доставка продукции ресторана до клиента</li>  
              </ul>
          </div>
      </div>
      </div>
      <div class="modal-footer">
        <a class="btn btn-primary rounded mx-auto d-block" href="https://trk.ppdu.ru/click?uid=111807&pid=1&oid=131ca6e0-b3bc-47f8-8367-180f65044009&erid=Kra23oSXH&sub1=https://trk.ppdu.ru/click?uid=111807&pid=1&oid=c089a32e-fd50-45a8-a650-dba09753e928&erid=Kra23omvo&sub1=courierburger" role="button">Откликнуться</a>
    </div>
    </div>
  </div>
</div>

          

      </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="{{ asset('vpolis/images/jobs/burgerking.png') }}" alt="BURGER KING"/>
        <div class="card-body p-4">
        <!-- Кнопка-триггер модального окна -->
<button type="button" class="btn btn-primary rounded mx-auto d-block" data-toggle="modal" data-target="#exampleModal11">
 <div class="col-md-16">
   <h6 class="row justify-content-center align-items-center mb-0 font-weight-medium text-uppercase "><strong>Повар-кассир в Burger King</strong></h6> 
</div>
</button>

<!-- Модальное окно -->
<div class="modal fade" id="exampleModal11" tabindex="-1" aria-labelledby="exampleModalLabel11" aria-hidden="true">
 <div class="modal-dialog">
   <div class="modal-content">
     <div class="modal-header">
       <h5 class="modal-title" id="exampleModalLabel11">О вакансии</h5>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
     </div>
     <div class="modal-body">
       <div class="mt-4">
         <h5 class="mb-3">Требования</h5>
         <div class="job-detail-desc mt-2">
             <ul class="job-detail-list list-unstyled mb-0 text-muted">
                 <li><i class="uil uil-circle"></i> Свободное владение русским языком</li>
                 <li><i class="uil uil-circle"></i> Возраст от 18 лет</li> 
                 <li><i class="uil uil-circle"></i> Можно без опыта работы</li> 
               </ul>
         </div>
     </div>
     
     <div class="mt-4">
         <h5 class="mb-3">Преимущества</h5>
         <div class="job-detail-desc mt-2">
             <ul class="job-detail-list list-unstyled mb-0 text-muted">
                 <li><i class="uil uil-circle"></i> Официальное оформление</li> 
                 <li><i class="uil uil-circle"></i> Зарплата на банковскую карту</li> 
                 <li><i class="uil uil-circle"></i> Премии и бонусы</li> 
                 <li><i class="uil uil-circle"></i> Гибкий график работы</li>
                 <li><i class="uil uil-circle"></i> Бесплатное оформление мед книжки</li> 
                 <li><i class="uil uil-circle"></i> Вкусное питание и красивая форма от компании</li> 
                 <li><i class="uil uil-circle"></i> Карьерный рост</li> 
             
             </ul>
         </div>
     </div>

     <div class="mt-4">
         <h5 class="mb-3">Задачи</h5>
         <div class="job-details-desc">
             <ul class="job-detail-list list-unstyled mb-0 text-muted">
                 <li><i class="uil uil-circle"></i> Изготовление продукции ресторана</li>                      
             </ul>
         </div>
     </div>
     </div>
     <div class="modal-footer">
      <a class="btn btn-primary rounded mx-auto d-block" href="https://trk.ppdu.ru/click?uid=111807&pid=1&oid=c31a6fd4-c432-48ab-8169-96d5489562c4&erid=Kra23oSXH&sub1=cashier" role="button">Откликнуться</a>
  </div>
   </div>
 </div>
</div>

         

     </div>
     </div>
    </div>
  </div> 
  </div>
  
  

</section>
<!-- /Jobs page -->

@endsection