<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$qa_skin_url.'/style.css">', 0);
?>

    <script>
        $(document).ready(function () {
            $('input[type=text], textarea').characterCounter();
        });
    </script>
    <div id="inquiry">
        <div id="inquiry_notice">
                <p><br></p><dl class="dl_list" style="margin: 0px; padding: 0px; border: 0px; font-family: &quot;Noto Sans KR&quot;;  text-size-adjust: none; letter-spacing: -0.7px; word-break: keep-all; word-wrap: break-word; list-style: none;  font-size: 14px;"><dt style="margin: 0px; padding: 0px; border: 0px; background: transparent; text-size-adjust: none; letter-spacing: -0.05em; word-break: keep-all; word-wrap: break-word; list-style: none; font-size: 16px;">이용자는 개인정보 수집 및 이용에 동의하지 않을 권리가 있습니다. 그러나, 동의하지 않으실 경우 상담, 문의 신청이 접수되지 않습니다. 기타 개인정보 처리에 관한 자세한 사항은 홈페이지 하단 개인정보처리방침을 참고하시기 바랍니다.</dt></dl><dl class="dl_list" style="margin: 32px 0px 0px; padding: 0px; border: 0px; font-family: &quot;Noto Sans KR&quot;;  text-size-adjust: none; letter-spacing: -0.7px; word-break: keep-all; word-wrap: break-word; list-style: none;  font-size: 14px;"><dt style="margin: 0px; padding: 0px; border: 0px; background: transparent; text-size-adjust: none; letter-spacing: -0.05em; word-break: keep-all; word-wrap: break-word; list-style: none; font-size: 16px;"><strong style="margin: 0px; padding: 0px; border: 0px; background: transparent; text-size-adjust: none; letter-spacing: -0.05em; word-break: keep-all; word-wrap: break-word;">개인정보 수집 이용에 관한 동의</strong></dt><dd style="margin: 3px 0px 0px; padding: 0px; border: 0px; background: transparent; text-size-adjust: none; letter-spacing: -0.05em; word-break: keep-all; word-wrap: break-word; list-style: none; font-size: 16px; "><ul class="inlist" style="margin: 2px 0px 0px; padding: 0px; border: 0px; background: transparent; text-size-adjust: none; letter-spacing: -0.05em; word-break: keep-all; word-wrap: break-word; list-style: none;"><li style="margin: 8px 0px 0px; padding: 0px; border: 0px; background: transparent; text-size-adjust: none; letter-spacing: -0.05em; word-break: keep-all; word-wrap: break-word; list-style: none; line-height: 26px;">회사는 고객 상담, 서비스 문의 등을 위해 아래와 같은 개인정보를 수집하고 있습니다.</li><li style="margin: 15px 0px 0px; padding: 0px; border: 0px; background: transparent; text-size-adjust: none; letter-spacing: -0.05em; word-break: keep-all; word-wrap: break-word; list-style: none; line-height: 26px;">- 수집 항목 : 필수항목(이름, 이메일, 전화번호), 선택항목(주소)</li><li style="margin: 15px 0px 0px; padding: 0px; border: 0px; background: transparent; text-size-adjust: none; letter-spacing: -0.05em; word-break: keep-all; word-wrap: break-word; list-style: none; line-height: 26px;">- 수집 목적 : 상담, 문의 신청 접수 및 결과 통보, 기타 민원 응대</li><li style="margin: 15px 0px 0px; padding: 0px; border: 0px; background: transparent; text-size-adjust: none; letter-spacing: -0.05em; word-break: keep-all; word-wrap: break-word; list-style: none; line-height: 26px;">- 개인정보 수집방법 : 이용자가 홈페이지상에 직접 입력</li><li style="margin: 15px 0px 0px; padding: 0px; border: 0px; background: transparent; text-size-adjust: none; letter-spacing: -0.05em; word-break: keep-all; word-wrap: break-word; list-style: none; line-height: 26px;">- 서비스 이용과정이나 사업 처리 과정에서 자동으로 수집될 수 있는 항목 : 서비스 이용기록, 접속로그, 쿠키, 접속 IP정보</li></ul></dd></dl><dl class="dl_list" style="margin: 32px 0px 0px; padding: 0px; border: 0px; font-family: &quot;Noto Sans KR&quot;;  text-size-adjust: none; letter-spacing: -0.7px; word-break: keep-all; word-wrap: break-word; list-style: none;  font-size: 14px;"><dt style="margin: 0px; padding: 0px; border: 0px; background: transparent; text-size-adjust: none; letter-spacing: -0.05em; word-break: keep-all; word-wrap: break-word; list-style: none; font-size: 16px;"><strong style="margin: 0px; padding: 0px; border: 0px; background: transparent; text-size-adjust: none; letter-spacing: -0.05em; word-break: keep-all; word-wrap: break-word;">개인정보의 보유 및 이용기간</strong></dt><dd style="margin: 3px 0px 0px; padding: 0px; border: 0px; background: transparent; text-size-adjust: none; letter-spacing: -0.05em; word-break: keep-all; word-wrap: break-word; list-style: none; font-size: 16px; "><p style="border: 0px; background: transparent; text-size-adjust: none; letter-spacing: -0.05em; word-break: keep-all; word-wrap: break-word;">회사는 수집 이용 목적이 달성된 때에는 고객의 개인정보를 지체없이 파기합니다.<br>다만 상법, 전자상거래등에서의 소비자보호에 관한 법률 등 법령의 규정에 의하여 보존할 필요성이 있는 경우에는 아래의 예시와 같이 고객의 개인정보를 보관할 수 있습니다.</p><ul class="list_1dep" style="margin: 13px 0px 0px; padding: 0px; border: 0px; background: transparent; text-size-adjust: none; letter-spacing: -0.05em; word-break: keep-all; word-wrap: break-word; list-style: none;"><li class="scont" style="margin: 0px; padding: 0px; border: 0px; background: transparent; text-size-adjust: none; letter-spacing: -0.05em; word-break: keep-all; word-wrap: break-word; list-style: none; line-height: 26px;"><p style="border: 0px; background: transparent; text-size-adjust: none; letter-spacing: -0.05em; word-break: keep-all; word-wrap: break-word;">관계법령에 의한 보존 사유(예시)</p><p style="border: 0px; background: transparent; text-size-adjust: none; letter-spacing: -0.05em; word-break: keep-all; word-wrap: break-word;">이 경우 회사는 보관하는 정보를 그 보관의 목적으로만 이용하며 보존기간은 아래와 같습니다.</p><ul class="inlist" style="margin: 2px 0px 0px; padding: 0px; border: 0px; background: transparent; text-size-adjust: none; letter-spacing: -0.05em; word-break: keep-all; word-wrap: break-word; list-style: none;"><li style="margin: 8px 0px 0px; padding: 0px; border: 0px; background: transparent; text-size-adjust: none; letter-spacing: -0.05em; word-break: keep-all; word-wrap: break-word; list-style: none; line-height: 26px;"><span class="stit01" style="margin: 0px; padding: 0px; border: 0px; background: transparent; text-size-adjust: none; letter-spacing: -0.05em; word-break: keep-all; word-wrap: break-word; display: block;">1) 계약 또는 청약철회 등에 관한 기록 : 5년</span></li><li style="margin: 15px 0px 0px; padding: 0px; border: 0px; background: transparent; text-size-adjust: none; letter-spacing: -0.05em; word-break: keep-all; word-wrap: break-word; list-style: none; line-height: 26px;"><span class="stit01" style="margin: 0px; padding: 0px; border: 0px; background: transparent; text-size-adjust: none; letter-spacing: -0.05em; word-break: keep-all; word-wrap: break-word; display: block;">2) 대금결제 및 재화 등의 공급에 관한 기록 : 5년</span></li><li style="margin: 15px 0px 0px; padding: 0px; border: 0px; background: transparent; text-size-adjust: none; letter-spacing: -0.05em; word-break: keep-all; word-wrap: break-word; list-style: none; line-height: 26px;"><span class="stit01" style="margin: 0px; padding: 0px; border: 0px; background: transparent; text-size-adjust: none; letter-spacing: -0.05em; word-break: keep-all; word-wrap: break-word; display: block;">3) 소비자의 불만 또는 분쟁처리에 관한 기록 : 3년</span></li></ul></li></ul></dd></dl><dl class="dl_list" style="margin: 32px 0px 0px; padding: 0px; border: 0px; font-family: &quot;Noto Sans KR&quot;;  text-size-adjust: none; letter-spacing: -0.7px; word-break: keep-all; word-wrap: break-word; list-style: none;  font-size: 14px;"><dt style="margin: 0px; padding: 0px; border: 0px; background: transparent; text-size-adjust: none; letter-spacing: -0.05em; word-break: keep-all; word-wrap: break-word; list-style: none; font-size: 16px;">기타 개인정보 처리에 관한 자세한 사항은 홈페이지 하단 개인정보처리방침을 참고하시기 바랍니다.</dt></dl><dl class="dl_list" style="margin: 32px 0px 0px; padding: 0px; border: 0px; font-family: &quot;Noto Sans KR&quot;;  text-size-adjust: none; letter-spacing: -0.7px; word-break: keep-all; word-wrap: break-word; list-style: none;  font-size: 14px;"><dt style="margin: 0px; padding: 0px; border: 0px; background: transparent; text-size-adjust: none; letter-spacing: -0.05em; word-break: keep-all; word-wrap: break-word; list-style: none; font-size: 16px;">이용자는 개인정보 수집 및 이용에 동의하지 않을 권리가 있습니다. 그러나, 동의하지 않으실 경우 상담, 문의 신청이 접수되지 않습니다. 기타 개인정보 처리에 관한 자세한 사항은 홈페이지 하단 개인정보처리방침을 참고하시기 바랍니다.</dt></dl>
        </div>
        <div id="agreement" class="input-field">
            <p>
                <label>
                    <input type="checkbox" style="display:none;" />
                    <span>동의하시겠습니까?</span>
                </label>
            </p>

        </div>
        <div id="inquiry_content">
            <table>
                <tbody>
                    <tr>
                        <td class="input-field">
                            <input type="text" placeholder="이름" data-length="10">
                        </td>
                    </tr>
                    <tr>
                        <td class="input-field">
                            <input type="text" placeholder="이메일" data-length="20">
                        </td>
                    </tr>
                    <tr>
                        <td class="input-field">
                            <input type="text" placeholder="제목" data-length="20">
                        </td>
                    </tr>
                    <tr>
                        <td class="input-field">
                            <textarea name="" id="textarea1" class="materialize-textarea" placeholder="내용" data-length="100"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td class="input-field file-field">
                            <div class="btn">
                                <span>첨부파일</span>
                                <input type="file" class="btn black white-text">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="center-align">
                            <button type="submit" class="btn black white-text">문의하기</button>
                        </td>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>