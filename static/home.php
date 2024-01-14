
<div class="main">
    <div class="md:flex md:h-fit">
        <div class="w-fit h-fit p-5 lg:ml-16 xl:ml-36 flex lg:justify-end">
            <img src="public/20230619_094535.jpg" alt="" class="w-full h-auto rounded-lg shadow-xl right-0">
        </div>
        <div>
            <div class="md:absolute md:right-5 xl:mr-24 md:w-[55%] xl:w-[47%] md:mt-14 lg:mt-28 2xl:mt-36 md:border-2 lg:py-10 md:py-4 md:h-fit md:bg-slate-50 md:shadow-xl">
                <div class="p-5 pt-0 flex flex-col text-center">
                    <h1 class="text-2xl font-semibold lg:text-3xl">Severine Deutl</h1>
                    <span class="text-xl lg:text-2xl">qualifizierte Tagesmutter seit 14 Jahren</span>
                </div>
                <div class="w-full px-10 font-medium lg:text-lg">
                    <span>
                        Hallo, liebe Eltern und Kinder! Mein Name ist Severine Deutl und ich bin leidenschaftliche Tagesmutter mit langjähriger Erfahrung im liebevollen Betreuen von Kindern. 
                        Ich lebe in Niedernissa Erfurt und biete hier in familiärer Atmosphäre eine zuverlässige und herzliche Kinderbetreuung an.
                    </span>
                </div>
            </div>
        </div>
        <div class="w-full md:w-fit p-5 md:mt-96 md:pt-20 xl:pr-auto xl:pl-16">
            <div class="flex justify-center">
                <img class="mx-auto w-2/4 md:w-2/4 shadow-2xl rounded-2xl border-2" src="public/alltag1.jpg" alt="">
            </div>
        </div>
    </div>
    
    
    <div class="mt-20 p-5 font-medium lg:text-lg">
        <div class="text-center font-semibold">
            <h1>Was möchtest du wissen?</h1>
            <div class="w-full p-5 flex flex-col md:grid md:grid-cols-2 md:grid-rows-2 lg:grid-cols-3 lg:grid-rows-2 gap-x-5 justify-between space-y-5">
                <a onclick="scrollToElement('activities')" class="w-full min-w-[30%] hover:cursor-pointer border-2 py-2 mt-5 shadow-lg active:scale-95 transition-all duration-300 active:bg-slate-200">Beschäftigungsangebot</a>
                <a onclick="scrollToElement('costs')" class="w-full min-w-[30%] hover:cursor-pointer border-2 py-2 shadow-lg active:scale-95 transition-all duration-300">Kosten</a>
                <a onclick="scrollToElement('times')" class="w-full min-w-[30%] hover:cursor-pointer border-2 py-2 shadow-lg active:scale-95 transition-all duration-300">Betreuungszeiten</a>
                <a onclick="scrollToElement('aboutMe')" class="w-full min-w-[30%] hover:cursor-pointer border-2 py-2 shadow-lg active:scale-95 transition-all duration-300">Mehr über mich</a>
                <a onclick="scrollToElementDiffPage('firstDays', '/information')" class="w-full min-w-[30%] hover:cursor-pointer border-2 py-2 shadow-lg active:scale-95 transition-all duration-300">Eingewöhnung</a>
                <a onclick="scrollToElementDiffPage('daycare', '/information')" class="w-full min-w-[30%] hover:cursor-pointer border-2 py-2 shadow-lg active:scale-95 transition-all duration-300">Tagesstätte</a>
            </div>
        </div>
        <div class="mt-40 space-y-14">
            <div id="activities" class="px-5 md:flex space-y-5 items-center">
                <div class="w-full bg-white 2xl:px-20 p-5 border-2 shadow-lg">
                    <h1 id="activitiesHeading" class="text-xl font-semibold text-center">Beschäftigungsangebot</h1>
                    <p>
                        In der Regel arbeite ich mit einer kleinen altersgemischten Gruppe bis 5 Kinder im Alter von 0 bis 3 Jahre. Die Kinder können so von den Großen lernen oder den Kleinen helfen.
                        Meine Schwerpunkte sind Sinnes- und Sprachförderung. Ich bastele jahres-zeitengemäß mit den Kindern, wir schneiden, kleben, malen, gestalten oder stempeln gemeinsam. Wir schauen uns viele Bilderbücher an, in denen ich die Kinder dazu animiere, mir zu erzählen, was sie sehen. Den Größeren lese ich auch Bücher mit spannenden Geschichten vor.
                        Wir werden uns wann immer es möglich ist in der Natur, an der frischen Luft aufhalten, um sinnhafte Erfahrungen zu machen und alles zu erkunden.
                    </p>
                </div>
                <div class="w-full">
                    <img class="w-2/3 lg:w-1/2 mx-auto rounded-xl shadow-xl" src="public/20230601_101956.jpg" alt="">
                </div>   
            </div>
            <div id="costs" class="px-5 md:flex flex-row-reverse items-center space-y-5">
                <div class="w-full bg-white 2xl:px-20 p-5 border-2 shadow-lg">
                    <h1 id="costsHeading" class="text-xl font-semibold text-center">Kosten</h1>
                    <p>
                        Die Kosten für Kindergrippe und Kindertagespflege sind identisch und werden über das Jugendamt abgerechnet. 
                        Nur Essens- und Materialkosten müssen von den Eltern übernommen werden und können individuell mit mir abgestimmt werden.
                    </p>
                </div>
                <div class="w-full">
                    <img class="w-2/3 lg:w-1/2 mx-auto rounded-xl shadow-xl" src="public/20221108_103151.jpg" alt="">
                </div>
                
            </div>
            <div id="times" class="px-5 md:flex items-center space-y-5">
                <div class="md:flex md:justify-center flex-col w-full bg-white items-center 2xl:px-20 p-5 border-2 shadow-lg h-fit">
                    <h1 id="timesHeading" class="text-xl font-semibold text-center">Betreuungszeiten</h1>
                    <p class="text-center">
                        <b>Montag</b> bis <b>Freitag</b> <br>
                        <b>7:00</b> - <b>16:00</b> Uhr <br>
                        Andere Betreuungszeiten sind nach Absprache natürlich auch möglich.
                    </p>
                </div>
                <div class="w-full">
                    <img class="w-2/3 lg:w-1/2 mx-auto rounded-xl shadow-xl" src="public/alltag3.jpg" alt="">
                </div>      
            </div>
            <div id="aboutMe" class="px-5 md:flex space-y-5">
                <div class="w-full bg-white 2xl:px-20 p-5 border-2 shadow-lg md:mt-24">
                    <h1 id="aboutMeHeading" class="text-xl font-semibold text-center">Mehr über mich</h1>
                    <p>
                        Ich genoss jede Minute meines Erziehungsurlaubs und meine Liebe zur Kinderbetreuung wuchs bis heute an. Darauf folgend habe ich dies zu meinem Beruf gemacht.
                        Seit 2010 bin ich nun als qualifizierte Kindertagespflegeperson tätig.
                        <br>
                        Ich habe eine Qualifizierung als Tagespflegeperson sowie den Erste-Hilfe-Schein am Kind.
                        Das Jugendamt hat mir die Pflegeerlaubnis zur Betreuung von Tagespflegekindern erteilt.
                    </p>
                </div>
                <div>
    
                </div>  
            </div>
        </div>   
    </div>
</div>


 






