1.SELECT auto.marka, auto.kolor, komis.miasto FROM auto left JOIN umowa on auto.id=umowa.auto_id LEFT JOIN komis on umowa.komis_id=komis.id; 
2.select o1.imie as buyer, o2.imie as seler, auto.marka, auto.kolor from umowa join osoba o1 on umowa.kupujacy_id= o1.id join osoba o2 on umowa.sprzedajacy_id=o2.id join auto on umowa.auto_id=auto.id; 
3.SELECT auto.marka, auto.kolor, komis.miasto from auto INNER join umowa on auto.id=umowa.auto_id inner JOIN komis on umowa.auto_id=komis.id; 
4.SELECT osoba.imie, osoba.nazwisko, auto.kolor, auto.marka from osoba inner join umowa on osoba.id=umowa.kupujacy_id inner join auto on umowa.auto_id=auto.id; 
5.SELECT osoba.imie, osoba.nazwisko, auto.kolor, auto.marka from osoba inner join umowa on osoba.id=umowa.sprzedajacy_id inner join auto on umowa.auto_id=auto.id; 
6.SELECT auto.*, umowa.kupujacy_id, umowa.sprzedajacy_id, umowa.komis_id from auto LEFT JOIN umowa on auto.id=umowa.auto_id where auto.marka='mazda' is not null; 
7.SELECT auto.*, umowa.kupujacy_id, umowa.sprzedajacy_id, umowa.komis_id from auto LEFT JOIN umowa on auto.id=umowa.auto_id where umowa.kupujacy_id IS NULL; 
8.SELECT auto.*, umowa.kupujacy_id, umowa.sprzedajacy_id, umowa.komis_id from auto LEFT JOIN umowa on auto.id=umowa.auto_id where umowa.sprzedajacy_id IS NULL; 
9.SELECT osoba.i , osoba.n, auto.kolor, auto.marka from osoba left join umowa on umowa.kupujacy_id=osoba.id LEFT join auto on umowa.auto_id=auto.id where umowa.kupujacy_id is not null; 
10.SELECT osoba.i , osoba.n, auto.kolor, auto.marka from osoba left join umowa on umowa.sprzedajacy_id=osoba.id LEFT join auto on umowa.auto_id=auto.id where umowa.sprzedajacy_id is not null; 
11.SELECT AUTO.* , osoba.i, osoba.n FROM auto left JOIN umowa on umowa.auto_id=auto.id left JOIN osoba on umowa.kupujacy_id=osoba.id; 
12.SELECT AUto.* , osoba.i, osoba.n FROM auto left JOIN umowa on umowa.auto_id=auto.id left JOIN osoba on umowa.sprzedajacy_id=osoba.id; 
13. SELECT DISTINCT miasto FROM komis LEFT JOIN umowa ON komis.id=umowa.komis_id
14. SELECT auto.*, osoba.* FROM `umowa` LEFT JOIN auto on auto.id=umowa.auto_id LEFT JOIN osoba on osoba.id=umowa.kupujacy_id WHERE auto.marka='mazda'
15. SELECT auto.*, komis.miasto FROM `umowa` LEFT JOIN auto on auto.id=umowa.auto_id LEFT JOIN komis on komis.id=umowa.komis_id WHERE auto.marka='BMW'
16. SELECT count(umowa.kupujacy_id) AS liczba_kupionych, osoba.i, osoba.n FROM `umowa` LEFT JOIN osoba on osoba.id=umowa.kupujacy_id GROUP BY osoba.i, osoba.n
17. SELECT count(umowa.komis_id) AS liczba_sprzedanych, komis.miasto FROM `umowa` LEFT JOIN komis on komis.id=umowa.komis_id GROUP BY komis.miasto
!! 18. SELECT DISTINCT komis.miasto, umowa.id FROM `umowa` LEFT JOIN komis on komis.id=umowa.komis_id ORDER BY umowa.id DESC;
19. SELECT auto.*, osoba.i, osoba.n FROM `umowa` LEFT JOIN auto on auto.id=umowa.auto_id LEFT JOIN osoba on osoba.id=umowa.kupujacy_id where auto.paliwo='diesel'
20. SELECT auto.*, osoba.i, osoba.n FROM `umowa` LEFT JOIN auto on auto.id=umowa.auto_id LEFT JOIN osoba on osoba.id=umowa.sprzedajacy_id where auto.paliwo='benzyna'
21. SELECT auto.*, osoba.i, osoba.n, osoba.data_ur FROM `umowa` LEFT JOIN auto on auto.id=umowa.auto_id LEFT JOIN osoba on osoba.id=umowa.kupujacy_id order by osoba.data_ur
22. SELECT auto.* FROM `umowa` LEFT JOIN auto on auto.id=umowa.auto_id LEFT JOIN komis on komis.id=umowa.komis_id where komis.miasto!='warszawa'
23. SELECT osoba.i, osoba.n FROM `umowa` LEFT JOIN osoba on osoba.id=umowa.sprzedajacy_id LEFT JOIN komis on komis.id=umowa.komis_id where komis.miasto='opole'
24. SELECT avg(auto.przebieg), osoba.i, osoba.n FROM `umowa` LEFT JOIN osoba on osoba.id=umowa.sprzedajacy_id LEFT JOIN auto on auto.id=umowa.auto_id group by osoba.i, osoba.n
25. SELECT COUNT(umowa.id), komis.miasto FROM `umowa` LEFT JOIN komis on komis.id=umowa.komis_id group by komis.miasto
26. 
